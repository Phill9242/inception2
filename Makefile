HOSTS_ENTRY := 127.0.0.1   phiolive.42.fr
VOLUMES:= "db_data" "wp_data" 

VOLUME_DIR = /home/phiolive/data/
WORDPRESS_VOLUME_DIR = $(VOLUME_DIR)wordpress
MARIADB_VOLUME_DIR = $(VOLUME_DIR)mysql

all: volume hosts
	cd srcs/ && docker-compose -f docker-compose.yml up --build -d

$(MARIADB_VOLUME_DIR):
	sudo mkdir -p $(MARIADB_VOLUME_DIR)
	docker volume create --name db_data --opt type=none --opt device=$(MARIADB_VOLUME_DIR) --opt o=bind

$(WORDPRESS_VOLUME_DIR):
	sudo mkdir -p $(WORDPRESS_VOLUME_DIR)
	docker volume create --name wp_data --opt type=none --opt device=$(WORDPRESS_VOLUME_DIR) --opt o=bind

volume: | $(MARIADB_VOLUME_DIR) $(WORDPRESS_VOLUME_DIR)

hosts:
	sudo -S sh -c 'grep -qF "$(HOSTS_ENTRY)" /etc/hosts || echo $(HOSTS_ENTRY) >> /etc/hosts'

down:
	cd srcs/ && docker-compose -f docker-compose.yml down

clean: down
	sudo rm -rf /home/phiolive/data

fclean: clean
	sudo -S sh -c "sed -i '/$(HOSTS_ENTRY)/d' /etc/hosts"
	docker rmi wordpress mariadb nginx || true