<a name="index_block"></a>

=================
<a name="block1"></a>
## 1. Installation [↑](#index_block)
### Flash messages on PHP sessions

```php
<?php
    include '../src/Flash.php';
    $flashMessage = new FlasMessage();
```
<a name="block2"></a>
## 2. Adding a message [↑](#index_block)

<a name="block2.1"></a>
### 2.1. Add messages using the setMessage method [↑](#index_block)
### the first parameter is the status, the second parameter is the message text

```php
<?php
    $flashMessage->setMessage('success', 'Hello, world!');
```

<a name="block2.2"></a>
### 2.2. checking a message for existence [↑](#index_block)
### We simply pass the key of the message we need, if there is a key, it returns the truth, if not, then false

```php
<?php
    $flashMessage->issetMessage('success');
```

<a name="block2.3"></a>
### 2.3. Displaying a message[↑](#index_block)
### As well as in the issetMessage method, we simply send the key, it will display the found message by the key, then destroy it using the unset function

```php
<?php
    $flashMessage->getMessage('success');
```