arsip:
	make htaccess-production
	rm production.zip
	zip -r production.zip ./ -x *.git* *.md uploads/gallery/* uploads/reaction/* sokowolu.sql makefile
	make htaccess-revert

htaccess-production:
	mv .htaccess .htaccess.bak
	mv .htaccess-production .htaccess

htaccess-revert:
	mv .htaccess .htaccess-production
	mv .htaccess.bak .htaccess