# This is the theme for Unevenearth

# Development.

It's highly recommended that you use VVV to develop for this theme. That way you don't have to worry about any server dependencies and can just focus on what things look like.

Instructions for VVV can be found here: https://gist.github.com/daggerhart/d8f380f823f76b86894f

Once your installation is complete, you can start up your virtual machine and run your server by doing:

```
vagrant up
```

You'll have unevenearth installed. You can access it by going to http://local.wordpress.dev. The username / password combo is `admin` & `password`

Then let's install our sass dependencies (Sass):

```
gem install bundler
bundle install
```

Now you can change watch for sass changes while developing:

```
sass --watch sass/main.scss:style.css
```

## Troubleshooting

If `vagrant up` leaves you with a "no connection possible" type of page, try running "vagrant halt" first.
