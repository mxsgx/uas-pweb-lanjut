<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo isset($page, $page['title']) ? $page['title'] : 'Inventory Management System' ?></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta20/dist/css/tabler.min.css">
	<style type="text/css">
		@import url('https://rsms.me/inter/inter.css');
		:root {
			--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
		}
		body {
			font-feature-settings: "cv03", "cv04", "cv11";
		}
    </style>
</head>

<body data-bs-theme="dark">
