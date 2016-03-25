# decode_entities Add-on for Statamic

Converts HTML entities back into regular characters

## Installation

Copy the `decode_entities` folder to the `_add-ons` folder.

## Why?

Suppose you have a URL with a query string like this:

```
http://example.com/users?user-list=["jill","sam","dave"]
```

Returning that query string with `{{ get:user-list }}` will give you something like: `[%22jill%22,%22sam%22,%22dave%22]`.

However, if, like me, you need to use it in a piece of JavaScript, then that will just not work.

## Usage:

```
{{ get:user-list|decode_entities }}
```

From the above example, this will return:

```
["jill","sam","dave"]
```

**_Voilà!_**
