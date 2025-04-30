# bond-api-codespace
A repo to use as a PHP API James Bond Film Web Service CodeSpace
Use this to practice consuming a web service via a GitHub Page, etc.

## Getting Started

1. Fork this repo to your GitHub account.
2. Click the `Code` dropdown and choose `Open with Codespaces > New Codespace`.
3. Wait for Codespaces to initialize.
4. The PHP server will start automatically on port 3000.
5. Click the "Ports" tab in Codespaces and "Open in Browser".
6. View raw Release date sorted JSON data by providing the url >> api.php
7. View raw Box Office sorted JSON data by providing the url >> api.php?cat=box

Now you're ready to consume a web service using a JS enabled web page!

## Using your web service on a different server

In order to use your web service from a different server, such as from a GitHub page, in your Codespace, look for the "Ports" tab in the bottom panel.

On the right-hand side, under the "Visibility" column, if it says "Private", click the dropdown and choose "Public".

## What's Included

- PHP 8.2 (via Docker)
- Built-in server on port 3000
- Forwarded port for testing
- PHP API to be consumed as a web service
