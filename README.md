# personal-web-page
Personal web page for my professional portfolio.

## PWP Milestone 1 Feedback
Excellent work here on the documentation - your Purpose, Audience, Goal, Persona and Use Case are all clearly defined and well done. You may optionally want to add additional details to your plan if it would help you identify specific ways to set yourself apart as a developer. For example - if you wanted to work for corporate, educational or government institutions versus a smaller advertising firm or development shop. Or maybe non-profits are what you are interested in. Just something to think about - what you have here is an overall sufficient direction for a good start. Your HTML is excellent - nice job.

The major issue you have is the directory structure needs to be reorganized. See the instructions in Edits &amp; Suggestions below.

As of now, I can't pass this Milestone until the directory structure is fixed. Make the corrections listed below by the due date and this Milestone will pass at [Tier IV](https://bootcamp-coders.cnm.edu/projects/personal/rubric/).

#### Update 07/19/16
Nice work correcting the directory structure. Everything here looks great. Your Milestone 1 passes at [Tier IV](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). Nice work. We'll talk about the Milestone 2 UX Design components this week.

### Edits &amp; Suggestions
Your directory structure needs to be corrected. Take another look at the [Milestone 1 Documentation](https://bootcamp-coders.cnm.edu/projects/personal/milestone-one/).
  1. Rename the directory on the server to "personal-web-page". Your PhpStorm deployment settings **will** need to be updated after this step. SSH in, and `cd` into your `public_html` directory. Then rename your project directory using the following command: `mv 'documentation' 'personal-web-page'`
  2. In PhpStorm, create a new directory named `public_html`. Move the `/images` directory inside there.
  3. Inside `public_html`, create a new directory named `documentation`. Move your `milestone-1.php` file inside there.
  
## PWP Milestone 2&alpha; Feedback
Nice job on your wireframes. The layout choices you've made will work very well with the [Bootstrap](http://getbootstrap.com/) framework, which we will be covering in class. A one-page layout is a good choice if your content is on the lighter side. If any of your content sections grow, consider creating a separate page for those sections.

I would recommend that your mobile drop down page links each be on their own line, as phone smaller screens might be too narrow in some cases. Bootstrap does this by default. Also, think about how you would like to display your Portfolio items in a little more detail. Small but intricate UI elements like portfolio tiles can be somewhat more complicated to code and style. If you have a detailed plan about how you want them to look that will serve as a better guide when you start coding this up. This can also help you decide whether a 3rd party tool like [Swipebox](http://brutaldesign.github.io/swipebox/) might be something you want to use. Also, consider adding a footer - totally not required, but a footer is a useful content area on a website.

Your content strategy should be written in paragraph format, but I see that you've added the details directly into the wireframe. Everything here is well done overall, and you have a good guide to begin your development process (after the CSS and Bootstrap lessons). If you add the Content Strategy in paragraph format, I'll bump your grade to [Tier IV](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). Right now, I'm prepared to sign off on your Milestone at [Tier III](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). Nice work.

### Edits &amp; Suggestions
- Update Content Strategy in paragraph format by the due date (8/8/16), and I'll bump up your grade to Tier IV.

## PWP Milestone 2&alpha; Updated Feedback
Excellent work here - your single-page plan, content strategy, and wireframes are well done and clearly defined. You have a solid guide here for your development phase, and the layout choices you've shown in the wireframes will be straightforward to build using Bootstrap. Your HTML looks great too.

Take a look at [Bootstrap's Thumbnails](http://getbootstrap.com/components/#thumbnails). These may or may not work for your layout - but it might be helpful for an idea. These can be made equal height using some CSS [Flexbox](https://css-tricks.com/snippets/css/a-guide-to-flexbox/). I have an example put together [here](https://bootcamp-coders.cnm.edu/~rlewis37/bootstrap-sandbox/)

I've taken a look at what you've built so far here: https://bootcamp-coders.cnm.edu/~rengelbert/personal-web-page/public_html/documentation/. This is a great start, but I have a few ideas that will make the HTML and CSS much easier: 

- Remove all the CSS `position` rules. These are very tricky and unnecessary for this kind of layout (I know we haven't covered this in class yet.)
- Using the `background` property in CSS, add the image as the background on your "about" section instead of inserting in the HTML with an &lt;img&gt; tag. Also, use the `background-size: cover;` rule to make it fit the screen width/height.
- Use `padding` to create space between the "about" content and the image.
- Look at the HTML and CSS code for the following examples [here](https://bootcamp-coders.cnm.edu/~rlewis37/simple-template/public_html/) and [here](https://bootcamp-coders.cnm.edu/class-materials/bootstrap/stellar-parallax.php)

Also, ideally move your page into `/public_html`, and it will become your new landing page. Skyler and I are planning CSS/Front End Arc 2 soon - and we will be covering more in-depth CSS and Front-End work.

Overall, very nice work here. Your Milestone 2&alpha; passes at [Tier III](https://bootcamp-coders.cnm.edu/projects/personal/rubric) You are clear to begin development on your PWP.

### Edits &amp; Suggestions
- [FontAwesome](http://fontawesome.io/) will take care of your social media icons.
