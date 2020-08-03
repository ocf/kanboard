DOCKER_REVISION ?= kanboard-testing-$(USER)
DOCKER_TAG = docker-push.ocf.berkeley.edu/kanboard:$(DOCKER_REVISION)
RANDOM_PORT := $(shell expr $$(( 8000 + (`id -u` % 1000) + 2 )))

# OCF-UPDATE-CHECK relmon=12299
KB_VERSION := 1.12.15

.PHONY: dev
dev: cook-image
	@echo "Will be accessible at http://$(shell hostname -f ):$(RANDOM_PORT)/"
	docker run --rm -p "$(RANDOM_PORT):80" "$(DOCKER_TAG)"

.PHONY: cook-image
cook-image:
	docker build --build-arg grafana_version=v$(KB_VERSION) --pull -t $(DOCKER_TAG) .

.PHONY: push-image
push-image:
	docker push $(DOCKER_TAG)
