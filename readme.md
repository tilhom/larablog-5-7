Building blog on laravel 5.7
1. create new app: blog
2. open repo in github
	create new repo in github
directory - blog
	git init
	git add .
	git commit -m 'init'
	git remote add origin https://github.com/tilhom/<projectname>.git
	git push -u origin master 
3. download bootstarp template
- blog
- dashboard
- Sign-in
4. create views
 - blog/layuot/main
 - dashboard/layout/main
 - dashboard/layout/basic
 - blog/index
 - dashboard/index
 - dashboard/sign-in
5. create routes with views (3)
6. create db blog
7. create model and migration:
	php artisan make:model Post -m

	$table->integer('user_id');
    $table->string('title');
    $table->text('body');
8. create make auth
9. fix auth
10. create archives by year and month
