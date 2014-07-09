# README #

This is a repo for the ezpublish and ezpublish_legacy directories inside of a standard Bitnami stack install of eZPublish for testing purposes.

### How do I get set up? ###

* Install the Bitnami Stack of eZPublish
* Once installed, ensure you complete the setting up of Tags as detailed on the eZTags github page https://github.com/ezsystems/eztags/blob/master/doc/INSTALL. In my case, I had to:

1. Connect to the database using the mysql bin in /Applications/ezpublish-2014.03-0/mysql/bin/mysql to load in the eztags.sql in /Applications/ezpublish-2014.03-0/apps/ezpublish/htdocs/ezpublish_legacy/extension/eztags/sql/mysql/schema.sql
2. Enabled the eztags extension using the admin GUI and enable the **admin2** design in the relevant .ini file
3. Allow anonymous users to view and read tags
4. Edit the Articles class using the admin GUI and remove the existing Tags attribute and add it back in

* Then you can review my code commits to see how I found to do the fetch by Tags in the template first, and finally managed to work out the syntax for modifying the custom fetch class to make it more MVC.
