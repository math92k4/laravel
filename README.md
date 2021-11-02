First time setup local wordpress development enviroment

1. Host a blank Wordpress locally -- we use LocalWP
2. Install WP-migration-assistant
3. Sign in to www.oururl/wp-admin
4. Download a new backup via WP-migration
5. install backup on your locally hosted WP
6. Open theme-folder in code-editor
7. Pull this repo
8. Run npm install
9. Use LocalWP as live-server

Be aware that this setup uses the plugin "PODS" for content.

COMMANDS:

This repo automatically deploys to server, on push to master branch.

npm run watch
builds to dist on save. Used for development.

npm run prod
build, minify & bundle to dist. please use this command before deploy on push.
