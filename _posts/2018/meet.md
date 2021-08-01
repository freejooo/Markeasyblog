
---
layout:     post
date:       2018/05/21 10:00
title:      "meet"
category:   meaningful-labor
slug:       meet
---

# Markdown example post

This is just an example blog post.

## Sub-heading

Paragraphs are separated
by a blank line.

Two spaces at the end of a line  
produces a line break.

Text attributes _italic_,
**bold**, `monospace`.

Horizontal rule:

---

Strikethrough:
~~strikethrough~~

Bullet list:

* apples
* oranges
* pears

Numbered list:

  1. lather
  2. rinse
  3. repeat

Link [example](https://www.usertrack.net).

### Image:
![Image](https://www.usertrack.net/img/usertrack_logo.svg "icon")

> Markdown uses email-style > characters for blockquoting.
Inline <sup title="Hypertext Markup Language">HTML</sup> is supported.

# github-markdown-css

> The minimal amount of CSS to replicate the GitHub Markdown style

[<img src="https://cloud.githubusercontent.com/assets/170270/5219062/f22a978c-7685-11e4-8316-af25b6c89bc0.png" width="300">](http://sindresorhus.com/github-markdown-css)

## [Demo](https://sindresorhus.com/github-markdown-css)

## Install

Download [manually](https://raw.githubusercontent.com/sindresorhus/github-markdown-css/gh-pages/github-markdown.css), from [CDNJS](https://cdnjs.com/libraries/github-markdown-css), or with npm:

```
$ npm install github-markdown-css
```

## Usage

Import the `github-markdown.css` file and add a `markdown-body` class to the container of your rendered Markdown and set a width for it. GitHub uses `980px` width and `45px` padding, and `15px` padding for mobile.

```html
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="github-markdown.css">
<style>
	.markdown-body {
		box-sizing: border-box;
		min-width: 200px;
		max-width: 980px;
		margin: 0 auto;
		padding: 45px;
	}

	@media (max-width: 767px) {
		.markdown-body {
			padding: 15px;
		}
	}
</style>
<article class="markdown-body">
	<h1>Unicorns</h1>
	<p>All the things</p>
</article>
```

If you want code syntax highlighted, use GitHub Flavored Markdown rendered from [GitHub's `/markdown` API](https://docs.github.com/en/free-pro-team@latest/rest/reference/markdown).

## How

See [`generate-github-markdown-css`](https://github.com/sindresorhus/generate-github-markdown-css) for how it's generated and ability to generate your own.

## Dev

Run `npm run make` to update the CSS.


