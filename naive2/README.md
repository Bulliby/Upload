### Content-Type

In this example we only check the **Content-Type** of the file.
Or this information is provided by the client **navigator** and must not be
trusted

With the raw request file present in the current folder we make believe to the server that uploaded file is a PNG. The command `nc domain 80 < raw` permit to upload the file. Domain must be replaced by your domain (e.g *localhost*). The content of *raw* must also be modified (replace upload by your hostname).
