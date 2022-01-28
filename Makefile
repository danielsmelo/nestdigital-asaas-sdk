t=

init-hooks:
	git config core.hooksPath .githooks
semver:
	@sed -n 1p VERSION
up:
	docker-compose up
php:
	docker exec -it asaasphp bash