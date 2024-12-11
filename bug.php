This code snippet demonstrates a common error in PHP related to session handling.  Specifically, it fails to properly start a session before using session variables.

```php
<?php
// Attempt to access a session variable without starting the session
echo "Your username is: " . $_SESSION['username'];
?>
```