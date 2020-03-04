

- Install (first script tag, then npm install w/ laravel mix)
- Disable on links ( data-turbolinks="false" ) (in between script and laravel mix)
- <meta name="turbolinks-visit-control" content="reload">
- data-turbolinks-track for versioned assets (mix versioning)
- Script evaluation (do something to initialize things on every page (like bootstrap select2 or something))
- Redirect Headers()
- location.href = Turbolinks.visit('')
