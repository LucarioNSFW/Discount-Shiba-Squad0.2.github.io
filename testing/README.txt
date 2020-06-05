
===== Issues with running the game directly from the downloaded WebGL files: =====

Modern web browsers have a security policy that prevents running certain web scripts locally -- this is to prevent websites using file-system exploits to run malicious code on your system, or to snoop your files.

There's often no way to run Unity's WebGL builds from the downloaded zip without disabling this browser security policy. (If you choose to play from a local file I recommend you re-enable the security policy afterword, before you return to browsing the web!!)

An excellent write-up is available here: http://www.acute3d.com/local-webgl/



===== Instructions for running the WebGL files locally: =====

FIREFOX:
- Navigate to about:config in your address bar.
- Search for security.fileuri.strict_origin_policy
- Set the value to False
- Now you should be able to drag Index.html into the browser window to play!

CHROME:
- Go to your Chrome installation directory (e.g. "C:\Program Files (x86)\Google\Chrome\Application\chrome.exe")
- Right click and create a shortcut.
- Right click the shortcut and choose Properties.
- Go to Shortcut > Target and type [a single space] and --allow-file-access-from-files after the quoted path
  e.g. "C:\Program Files (x86)\Google\Chrome\Application\chrome.exe" --allow-file-access-from-files
- Now you should be able to open Chrome via the shortcut, and drag Index.html into that browser window to play!
