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
11. create comments 
12. create tags
13. working with email
 - CLI: php artisan make:mail Welcome
 - CommentsController: \Mail::to()->send(new Welcome($user));
 - CommentsController: use App\Mail\Welcome; 
 - Welcome:return $this->view('blog.emails.welcome');
 - create file welcome.blade.php
   <!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Welcome</title>
	</head>
	<body>
		<h1>Welcome to our Blog</h1>
	</body>
	</html>

 - http://mailtrap.io
 - fix username, password in .env
 - fix mail.php: 'from'
 - CommentsController: \Mail::to($user)->send(new Welcome($user));
 - fix Welcome.php: 
 	public $user;
 	*** 
 	public function __construct(User $user)
    {
        $this->user = $user;
    }
    ***
 - {{$user->name}} into welcome.blade.php
 - CLI: php artisan make:mail WelcomeAgain --markdown="blog.emails.welcome-again"
 - php artisan vendor:publish --tag=laravel-mail