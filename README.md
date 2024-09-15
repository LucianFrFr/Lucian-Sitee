# Lucian-site

Hello and welcome to my really shitty and messy code, if you ever see this I most likly quit this project / want to keep this open to the public.
Here is how to host:

# If you do not want to use the admin panel follow these steps.
1. Make a github repository, called whatever (does not matter).
2. Upload the src to the repository.
3. Now, use github pages with your domain or defualt github domain.

BOOM! You are now hosting my site :)


# Main Project Setup Guide

## 1. Setting Up a Local Development Environment

To develop your project locally, you'll need a local web server environment. Here are working choices:

- **XAMPP**: Includes Apache (web server), MySQL (database), and PHP.
- **WAMP**: A variant for Windows.

### Using XAMPP

#### Download and Install XAMPP

1. Go to the [XAMPP website](https://www.apachefriends.org/index.html).
2. Download :/

#### Start XAMPP

1. Open the XAMPP Control Panel.
2. Start the Apache server.

#### Set Up Your Project

1. Navigate to the XAMPP installation directory:
   - **Windows**: `C:\xampp`
2. Go to the `htdocs` directory. This is where you place your web files.

#### Create Your Project Folder

1. Inside `htdocs`, create a new folder for your project, e.g., `myproject`.

#### Add Your Files

1. Copy the following files into the `myproject` folder:
   - `admin.html`
   - `update.php`
   - `index.html`
   - `content.txt`

#### Access Your Project

1. Open a web browser and go to `http://localhost/myproject/index.html` to view your main page.
2. Access the admin panel by navigating to `http://localhost/myproject/admin.html`.

## 2. Deploying to a Web Server

To deploy your site to a live server, follow these steps:

### Choose a Web Hosting Provider

Select a web hosting provider that supports PHP, such as:
- **Bluehost**
- **SiteGround**


### Upload Your Files

1. Use an FTP client (e.g., FileZilla) or your web hosting provider’s file manager to upload your files to the server.
2. Typically, you would upload them to the `public_html` or `www` directory on the server.

### Set File Permissions

1. Ensure that `content.txt` has appropriate write permissions.
2. On most servers, you can set this using the FTP client or the file manager in your hosting control panel.

### Access Your Site

1. Open your browser and navigate to your domain to see your site, e.g., `http://yourdomain.com/index.html`.
2. Access the admin panel at `http://yourdomain.com/admin.html`.

