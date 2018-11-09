arsip:
	make htaccess-production
	rm production.zip
	zip -rq production.zip ./ -x uploads/ *.git* .htaccess.bak *.md composer.lock sokowolu.sql makefile
	make htaccess-revert
	echo "\n---- COMPRESSING SUCCESS ----\n"

htaccess-production:
	mv .htaccess .htaccess.bak
	mv .htaccess-production .htaccess

htaccess-revert:
	mv .htaccess .htaccess-production
	mv .htaccess.bak .htaccess