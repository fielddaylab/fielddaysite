.PHONY: build deploy

build:
	gulp styles
	make update-submodules

update-submodules:
	git submodule update --remote --merge

deploy-wcer:
	rsync -vrc * dgagnon@website.education.wisc.edu:/var/www/site/fielddaylab --exclude-from rsync-exclude

deploy:
	rsync -vrc * mli-field@fielddaylab.wisc.edu:/httpdocs --exclude-from rsync-exclude
