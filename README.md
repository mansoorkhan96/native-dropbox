# Dropbox Native

### Installation

Follow the official [NativePHP installation guide](https://nativephp.com/docs/1/getting-started/installation)

This application is a simple demo and does not use Socialite or any OAuth services to authenticate. So you will need to authorize the access to your Dropbox App using this link :

`https://www.dropbox.com/oauth2/authorize?client_id<YOUR_APP_KEY>&response_type=code&token_access_type=offline`

This will give you the `authorization_code` needed to retrieve a `refresh_token` with this curl request :

`curl https://api.dropbox.com/oauth2/token -d code=<ACCESS_CODE> -d grant_type=authorization_code -u <APP_KEY>:<APP_SECRET>`

Giving you access to the `refresh_token` needed in the `DROPBOX_REFRESH_TOKEN` indicated below . The other elements are available in your Dropbox App.

.env.

```env
DROPBOX_APP_KEY=
DROPBOX_APP_SECRET=
DROPBOX_REFRESH_TOKEN=
DROPBOX_TOKEN_URL=https://${DROPBOX_APP_KEY}:${DROPBOX_APP_SECRET}@api.dropbox.com/oauth2/token
```
