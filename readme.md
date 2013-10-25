# MP6 Expand Widget Controls

Currently, plugin authors are able to define a width for their widget controls using standard WordPress widget functionality.  If you're using the [MP6 plugin](http://wordpress.org/plugins/mp6), as of version 2.1.1, it overwrites the width set by other plugin authors with an `!important` in its stylesheet.  For some users, this is problematic because it means their widget controls are either hard to use or, at times, impossible to use.

This plugin was created to restore the original behavior for users who run into this issue.

The issue [has been reported](http://make.wordpress.org/ui/2013/10/21/mp6-2-1-1/#comment-24053) to the team working on the MP6 plugin.  I'm unaware of whether they'll change this in the plugin or find a better method for achieving what they want to do with the design.

I've simply created the MP6 Expand Widget Controls plugin for those users who need a fix for now and would like to also continue using MP6.