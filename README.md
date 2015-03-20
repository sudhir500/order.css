# order.css
This is a framework, which can be used to render CSS as per the page requirement.

Let’s assume that you have 1000+ page website. You have to show different kind of matter in each page. 
So that, defiantly design will be vary. 
Now these day trend is either you create a large CSS file or create multiple file.
We have to add correspondence file on each html/php page. It’s too difficult in both cases. 

Why not we choose order.css. Let’s assume all the CSS code has written in one file. You have more than 10K lines of code to handle
Your 1000+ pages. In normal condition this behavior is not good because your browser will lot of time to download your CSS file. 
That is give negative mark to your website. 
Another way, if you create multiple file then it’s difficult to handle. (You will busy cntrl+find (ha...Ha...ha))

So, in my framework, both problems will solve. 
You have to write all the CSS which is required in different- different pages. My code will automatically parse the required CSS for requested page.

For example, you hit contact.php, our framework will connect to style.css and look to column contact (/* >>> ORDER-home */)
I have introduce (>>> ORDER) to determine the column for each page. Our php code will take care of all code inside these columns.

When code is copied, it will return to page inside <style></style>
That’s it.

In your 10L lines of code, you are geeing small piece of code, which is exactly needed...

Isn't cool?
