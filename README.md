# Tryout of <https://github.com/githubERIK/openapi-php-multiparam-bug-example>

`composer install && php index.php` prints out the text that includes

```markdown
FAILED QUERY
labelIds=0%3DLabelOne%261%3DLabelTwo%262%3DLabelThreeException when calling DefaultApi->fetchNotes: [0] cURL error 6: Could not resolve: some.example.api.com (Domain name not found) (see http://curl.haxx.se/libcurl/c/libcurl-errors.html)
```

which shows that the `labelIds` query parameters

* LabelOne
* LabelTwo
* LabelThree

are added to the query as `labelIds=0%3DLabelOne%261%3DLabelTwo%262%3DLabelThree`,
but they should be `labelIds=LabelOne&labelIds=LabelTwo&labelIds=LabelThree`.
