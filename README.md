## base64pdf-download 

> PHP client/server to download a pdf file from a decoded base64 pdf string.

## Dependencies

1. Xampp
   - Apache server
   - PHP

## Installation

1. Clone this repository in your xampp's `DirectoryRoot`.
   - For default xampp installation, clone on `/xampp/htdocs`.
   - `git clone https://github.com/weaponsforge/base64pdf-download.git`
2. Start xampp's Apache service.
3. Load the app on  
`http://localhost/base64pdf-download/public`
4. Replace the `URL` input with other URL's that can serve expected data format required by `/public/download.php`
5. Encode valid JSON data in the `JSON Request Payload` text input with JSON data that will be accepted by the `URL` input encoded previously on #4.

@weaponsforge  
20210407