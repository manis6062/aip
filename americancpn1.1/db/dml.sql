INSERT INTO `theme_option` (`id`, `title`, `caption`, `head_back_image`, `head_color`, `custom_css`, `fav_icon`, `footer_color`, `footer_back_image`, `logo`, `created_by`, `feature_heading1`, `feature_desc3`, `feature_heading2`, `feature_heading3`, `feature_tagline1`, `feature_tagline2`, `feature_tagline3`, `feature_desc1`, `feature_desc2`, `theme_video`)
VALUES (1, 'american cpn', '', '', 'c7c7c7', '', '', 'c76b6b', '', '', 1, 'credit evaluation',
        'now that usa credit repair has done all the hard work, you get to sit back and enjoy the results! while you are relaxing, we will be hard at work with credit bureaus to help increase your',
        'set a goal', 'get results', 'analyze your credit report', 'devise a plan',
        'now the easy part, increasing your score!',
        'i want to improve my credit! what do i need to do? when you enlist the help of usa credit repair, you can be assured that as a professional credit management company, we will do our',
        'next we set a goal for your credit repair. in most cases repairing credit can take up to 90 days (or more in some cases).',
        '<iframe width="420" height="315" src="//www.youtube.com/embed/4SsgjAwZ_ZE" frameborder="0" allowfullscreen></iframe>');

INSERT INTO menu (id, menu_name, menu_type, status, menu_order, crtd_dt, crtd_by, updt_dt, updt_by, content_id, menu_parent, menu_module)
VALUES (6, 'web developing', 'top-menu', 'active', 5, '2014-06-06', 1, '2014-06-06', 1, 25, 4, 1);
INSERT INTO menu (id, menu_name, menu_type, status, menu_order, crtd_dt, crtd_by, updt_dt, updt_by, content_id, menu_parent, menu_module)
VALUES (8, 'fsdaf', 'top-menu', 'active', 7, '2014-06-12 09:45:41', 1, '2014-06-12 09:45:41', 1, 25, 1, 1);
INSERT INTO menu (id, menu_name, menu_type, status, menu_order, crtd_dt, crtd_by, updt_dt, updt_by, content_id, menu_parent, menu_module)
VALUES (9, 'home', 'main-menu/footer-menu', 'active', 8, '2014-08-19 11:25:21', 11, '2014-12-26 09:14:52', 1, 26, 0, 4);
INSERT INTO menu (id, menu_name, menu_type, status, menu_order, crtd_dt, crtd_by, updt_dt, updt_by, content_id, menu_parent, menu_module)
VALUES
  (10, 'legal cpn', 'main-menu/footer-menu', 'active', 9, '2014-08-19 12:47:24', 11, '2014-08-19 16:41:17', 11, 34, 0,
   1);
INSERT INTO menu (id, menu_name, menu_type, status, menu_order, crtd_dt, crtd_by, updt_dt, updt_by, content_id, menu_parent, menu_module)
VALUES
  (11, 'how it works', 'main-menu/footer-menu', 'active', 10, '2014-08-19 12:47:47', 11, '2014-08-19 16:34:24', 11,
   29,
   0, 1);
INSERT INTO menu (id, menu_name, menu_type, status, menu_order, crtd_dt, crtd_by, updt_dt, updt_by, content_id, menu_parent, menu_module)
VALUES
  (12, 'faq', 'main-menu/footer-menu', 'active', 11, '2014-08-19 12:48:05', 11, '2014-12-24 15:59:17', 11, 28, 0, 6);
INSERT INTO menu (id, menu_name, menu_type, status, menu_order, crtd_dt, crtd_by, updt_dt, updt_by, content_id, menu_parent, menu_module)
VALUES
  (13, 'services', 'main-menu/footer-menu', 'active', 12, '2014-08-19 12:48:23', 11, '2014-12-24 16:00:25', 11, 28, 0,
   1);
INSERT INTO menu (id, menu_name, menu_type, status, menu_order, crtd_dt, crtd_by, updt_dt, updt_by, content_id, menu_parent, menu_module)
VALUES
  (14, 'contact us', 'main-menu/footer-menu', 'active', 13, '2014-08-19 12:48:41', 11, '2014-08-19 13:54:27', 11, 25,
   0,
   3);
INSERT INTO menu (id, menu_name, menu_type, status, menu_order, crtd_dt, crtd_by, updt_dt, updt_by, content_id, menu_parent, menu_module)
VALUES
  (15, 'branch partner', 'footer-menu', 'active', 15, '2014-08-19 12:49:02', 11, '2014-09-05 14:46:26', 1, 31, 0, 1);
INSERT INTO menu (id, menu_name, menu_type, status, menu_order, crtd_dt, crtd_by, updt_dt, updt_by, content_id, menu_parent, menu_module)
VALUES
  (16, 'business opportunity', 'footer-menu', 'active', 16, '2014-08-19 12:49:19', 11, '2014-09-05 14:46:36', 1, 30,
   0,
   1);
INSERT INTO menu (id, menu_name, menu_type, status, menu_order, crtd_dt, crtd_by, updt_dt, updt_by, content_id, menu_parent, menu_module)
VALUES (17, 'testimonials', 'footer-menu', 'active', 17, '2014-08-19 12:49:37', 11, '2014-09-10 16:26:05', 1, 32, 0, 1);
INSERT INTO menu (id, menu_name, menu_type, status, menu_order, crtd_dt, crtd_by, updt_dt, updt_by, content_id, menu_parent, menu_module)
VALUES
  (18, 'sign up', 'main-menu/footer-menu', 'inactive', 14, '2014-08-19 12:49:52', 11, '2014-09-11 15:56:40', 11, 33,
   0,
   5);
INSERT INTO menu (id, menu_name, menu_type, status, menu_order, crtd_dt, crtd_by, updt_dt, updt_by, content_id, menu_parent, menu_module)
VALUES
  (19, 'forum', 'main-menu/footer-menu', 'active', 18, '2014-12-25 16:32:37', 11, '2014-12-26 09:35:20', 1, 26, 0, 7);


INSERT INTO `contact` (`id`, google, source, form, email, address, tel, site, `created_by`)
VALUES (1, 't',
        'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24131.779243410623!2d-73.95144090000001!3d40.88345120000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f1431e1e0d17:0x9432c6bbf28318fc!2senglewood+cliffs,+nj!5e0!3m2!1sen!2s!4v1413796924855',
        't', 'info@americacpn.com', '120-240 nam bibendum consectetur diam et fringilla', '1800-272-8030',
        'www.americacpn.com', 11);


INSERT INTO content (content_id, content_title, content_description, content_status, created_by, created_date, updated_by, updated_Date, updated_count)
VALUES (26, 'american cpn',
        '<p>groundbreaking new program offers a second chance at good credit if you or anyone you know has bad credit you should not only read this article but take action on the information in it. bad credit can make it difficult to get a lot of things in life (and if you have bad credit you know exactly what i mean).<br /><br />your credit is reviewed for more than credit cards. today your credit is checked when you apply for credit cards, car loans, a mortgage, an apartment, and even a job. you can and will be denied all of the above without a decent credit score. imagine not being able to get a job because of your credit and not having the income to payoff the very debts that are causing your credit to decline. it has become increasingly essential to obtain and maintain a good credit rating. but what do you do if you have blemishes on your credit report?<br /><br />due to the existing laws and policies established by the credit reporting agencies it is fairly easy for creditors to report a bad debt to put on your credit report, and difficult for you to remove negative and derogatory info from your report. the average time takes a creditor to get a bad debt reported is two weeks, while a bad debt may stay on your credit report from 2-10 years or more, if you do nothing. even if you contact the credit reporting agencies it can still take up to 90 days to remove or update negative items (if they get removed at all). ?even when you remove or correct negative info from your report you never fully recover the points which were lost due to the negative item. if you lose say 100 pts because of negative items removal or correction of those items will only gain back 25-40 pts, you still end up losing points.<br /><br />this system makes it very easy to spiral out of control and end up with a mountain of debt. even if you have maintained good credit for a good amount of time a few negative items can make it almost impossible to regain that same score. now there is hope no matter what your current credit situation is. even those with the worst credit can benefit from getting a cpn. the credit profile number (cpn) is a nine digit number separate from your social security number used for credit reporting and tracking purposes.<br /><br />you have heard a lot of people talking about this subject. some say that there is no such thing, others say that there are but are illegal, and some inform people say that they definitely are for real. well, let us provide a little more insight.<br /><br />legality of cpn:<br /><br />presently, federal law allows the ability for someone to legally use a private id # for financial reporting purposes instead of a social security number. title 5, section 7 of publication law 93-579 of government organization and employees act: (a) (1) it shall be unlawful for any federal, state or local government agency to deny any individual any right, benefit, or privilege provided by law because of such individual&rsquo;s refusal to disclose his or hers social security account number. what this means is federal law protects those who do not wish to disclose their personal information (ss#) except where required to do so. disclosure of your social security number is only required when dealing with the irs, your employer, or when applying for a federally insured mortgage. instead of a social security number, you now have the opportunity to establish a credit privacy number (cpn). a credit privacy number is a new 9 digit number established for financial reporting purposes.</p>',
        'yes', 1, '2014-12-25 10:41:50', 1, '2014-12-25 10:41:50', 7);
INSERT INTO content (content_id, content_title, content_description, content_status, created_by, created_date, updated_by, updated_Date, updated_count)
VALUES (27, 'frequently asked questions', '<p style="text-align: center;"><span style="font-family: arial; font-size: medium;">the credit profile number (cpn) explained.</span></p>
<p><span style="font-family: arial;"> </span></p>
<p><span style="font-family: arial; font-size: medium;"> </span></p>
<p><span style="font-family: arial;"> </span></p>
<p><span style="font-family: arial; font-size: medium;"><br />what is a credit profile number (cpn)? <img title="smile" src="/js/admin/tiny-mce/editor/plugins/emotions/img/smiley-smile.gif" border="0" alt="smile" />it is a nine digit number separate from your social security number used to track your credit activities and history.</span></p>
<p><span style="font-family: arial;"> </span></p>
<p><span style="font-family: arial;"><br /></span></p>
<p><span style="font-family: arial;"> </span></p>
<p><span style="font-family: arial; font-size: medium;"> </span></p>
<p><span style="font-family: arial;"> </span></p>
<p><span style="font-family: arial; font-size: medium;">can i use this number instead of my social security number? <img title="smile" src="/js/admin/tiny-mce/editor/plugins/emotions/img/smiley-smile.gif" border="0" alt="smile" />no, the credit profile number (cpn) does not replace your ss number; this number can only be used for credit reporting purposes. it cannot and should not be used for any government purposes including and not limited to: military, dss income, ssi, taxes; fha, va, or any government backed funding.</span></p>
<p><span style="font-family: arial;"> </span></p>
<p><span style="font-family: arial; font-size: medium;"> </span></p>
<p><span style="font-family: arial;"> </span></p>
<p><span style="font-family: arial; font-size: medium;"><br /> what can i use my new credit profile number (cpn) for? <img title="smile" src="/js/admin/tiny-mce/editor/plugins/emotions/img/smiley-smile.gif" border="0" alt="smile" />you can use your new credit profile number (cpn) for anything that would normally require you to use your ss number for credit reporting purposes. use it to receive credit cards, car loans, a mortgage, personal loans etc.</span></p>
<p><span style="font-family: arial;"> </span></p>
<p><span style="font-family: arial; font-size: medium;"> </span></p>
<p><span style="font-family: arial;"> </span></p>
<p><span style="font-family: arial; font-size: medium;"><br />am i responsible for the debts on my old report? <img title="smile" src="/js/admin/tiny-mce/editor/plugins/emotions/img/smiley-smile.gif" border="0" alt="smile" />yes, you are responsible for all debts on your old report and debts incurred with your credit profile number (cpn). you must remember that while you are rebuilding your credit, you must use your new credit profile number (cpn) wisely. if you have had troubled credit in the past don&rsquo;t repeat your mistakes.</span></p>
<p><span style="font-family: arial;"> </span></p>
<p><span style="font-family: arial; font-size: medium;"> </span></p>
<p><span style="font-family: arial;"> </span></p>
<p><span style="font-family: arial; font-size: medium;"><br />is this legal? <img title="laughing" src="/js/admin/tiny-mce/editor/plugins/emotions/img/smiley-laughing.gif" border="0" alt="laughing" />yes. you can use the existing laws to your advantage for a change. due to certain rights guaranteed by the 1974 us privacy act title v, you have the right to keep your ss number private and not be denied service due to your refusal. the credit bureaus are not government agencies, so you do not have to give them your ss number.</span></p>
<p><span style="font-family: arial;"> </span></p>
<p><span style="font-family: arial; font-size: medium;"> </span></p>
<p><span style="font-family: arial;"> </span></p>
<p><span style="font-family: arial; font-size: medium;"><br />what will my new fico be? <img title="surprised" src="/js/admin/tiny-mce/editor/plugins/emotions/img/smiley-surprised.gif" border="0" alt="surprised" />your credit profile will be blank. you will need to reestablish your credit, by applying for credit cards and other lines.</span></p>
<p><span style="font-family: arial;"> </span></p>
<p><span style="font-family: arial; font-size: medium;"> </span></p>
<p><span style="font-family: arial;"> </span></p>
<p><span style="font-family: arial; font-size: medium;"><br />is there another way to re-establish my credit? <img title="wink" src="/js/admin/tiny-mce/editor/plugins/emotions/img/smiley-wink.gif" border="0" alt="wink" />yes, we know that re-establishing credit can be a time consuming process. we can add fully paid off trade lines to boost your score. we can give you a new credit profile number (cpn) with a 700+ score (excellent credit), to use as you see fit.</span></p>
<p><span style="font-family: arial;"> </span></p>
<p><span style="font-family: arial; font-size: medium;"> </span></p>
<p><span style="font-family: arial;"> </span></p>
<p><span style="font-family: arial; font-size: medium;"><br />are you saying that i can use my credit profile number cpn to buy investment property or get a loan to start a business? <img title="money mouth" src="/js/admin/tiny-mce/editor/plugins/emotions/img/smiley-money-mouth.gif" border="0" alt="money mouth" />yes. leverage is a tool that has been used by the wealthy for generations. now you have it to use for your purposes.</span></p>
<p><span style="font-family: arial;"> </span></p>
<p><span style="font-family: arial; font-size: medium;"> </span></p>
<p><span style="font-family: arial;"> </span></p>
<p><span style="font-family: arial; font-size: medium;"><br />the cpn is a nine-digit number that has the exact same genetic makeup of a social security number. this is not a government issued number like an ein or tin. this number is not a new social and not a tax id or ein. it is simply an available file number at the credit bureaus that can have financial information reported. you have the right to establish this number only once, so do not abuse it. this explanation is not here to advise anyone to misrepresent your social security number, as you are completely responsible for any debts you incur using your credit privacy number.</span></p>
<p><span style="font-family: arial;"> </span></p>
<p><span style="font-family: arial; font-size: medium;"> </span></p>
<p><span style="font-family: arial;"> </span></p>
<p><span style="font-family: arial; font-size: medium;"><br />it is your legal right to keep your social security number private, and use a separate number for any credit related purposes. you are only required by law to disclose your social security number to the internal revenue service, your employer, when registering a motor vehicle, buying a firearm, or applying and obtaining a federally-insured loan such as fha, sallie mae, etc. i encourage you to use the laws to your advantage. each credit bureau works on a different schedule.</span></p>
<p><span style="font-family: arial;"> </span></p>
<p><span style="font-family: arial; font-size: medium;"> </span></p>
<p><span style="font-family: arial;"> </span></p>
<p><span style="font-family: arial; font-size: medium;"><br />in addition, the cpn is used by celebrities, congress members/government workers, and witness protection reasons. for example, celebrities use it because the media can use their ss# to track what they are buying and where they are simply by tracking their credit cards. further, in example, congress holds special privileges to the law; therefore, their privacy needs to be protected. in another example, witnesses under protection can be located if they use their true social security number for transaction. this is the reason why there is the existence of a credit privacy number program.</span></p>',
        'yes', 1, '2014-12-25 12:09:23', 1, '2014-12-25 12:09:23', 8);
INSERT INTO content (content_id, content_title, content_description, content_status, created_by, created_date, updated_by, updated_Date, updated_count)
VALUES (28, 'services', '<div class="services">
<p>having negative mistakes on your credit report can affect your financial future for years to come. that&rsquo;s why it&rsquo;s very important to stay up date with your credit report.
at once again credit, we understand that every person&rsquo;s credit situation is unique and depending on your credit report, we will inform you on which items we can dispute on your behalf. some items that we helped our client&rsquo;s dispute include but are not limited to the following:</p>
</div>
<div class="col-lg-3 col-sm-6">
<p>charge-off removal</p>
<p>foreclosure removal</p>
<p>repossession removal</p>
<p>collection removal</p>
</div>
<div class="col-lg-3 col-sm-6">
<p>bankruptcy removal</p>
<p>dispute status removal</p>
<p>judgment removal</p>
<p>foreclosure removal</p>
</div>
<div class="col-lg-3 col-sm-6">
<p>short sale removal</p>
<p>tax lien removal</p>
<p>late payment removal</p>
<p>inquiry removal</p>
</div>
<div class="col-lg-3 col-sm-6">
<p>update personal information</p>
<p>identity theft removal</p>
<p>chex systems removal</p>
<p>and much more</p>
</div>
<div class="container">
<div class="row">
<div class="row team-bar">
<div class="first-one-arrow hidden-xs">
<hr />
</div>
<div class="first-arrow hidden-xs">
<hr />
<em class="fa fa-angle-up"></em></div>
<div class="second-arrow hidden-xs">
<hr />
<em class="fa fa-angle-down"></em></div>
<div class="third-arrow hidden-xs">
<hr />
<em class="fa fa-angle-up"></em></div>
<div class="fourth-arrow hidden-xs">
<hr />
<em class="fa fa-angle-down"></em></div>
</div>
<div class="col-lg-6">
<h4>our credit restoration services are right for you:</h4>
<p>if you need to rebuild your credit</p>
<p>if you want to purchase a home</p>
<p>if you need to save money on auto and life insurance</p>
<p>if you can&rsquo;t get approved for credit or loans</p>
<p>if you need to improve your credit score</p>
<p>whether you need to improve your credit score, or need errors removed from your credit report, once again credit can help. we understand that you don&rsquo;t have the time to dispute costly errors on your credit report. that&rsquo;s why we do all the hard work for you. simply send us your credit reports and we will take care of the rest.</p>
</div>
<div class="col-lg-6">
<h4>why choose us to help you with your credit restoration needs?</h4>
<p>when it comes to choosing a credit restoration service, you want an experienced team with a proven track record of success. that&rsquo;s exactly what you will receive when you let our credit restoration team take care of all your credit restoration needs. many of our clients choose to work with us because:</p>
<p>we understand the intricate details of fcra and fdcpa rules and how they affect you<br /> we continue to educate ourselves on the new regulations and laws affecting your credit<br /> we work tirelessly to help you secure a better financial future<br /> we will remove inaccurate, unverifiable and incomplete information from your credit report.<br /> call us now at 1-800-730-3087 to prepare for a better financial future today!</p>
</div>
</div>
<div class="row team-bar">
<div class="first-one-arrow hidden-xs">
<hr />
</div>
<div class="first-arrow hidden-xs">
<hr />
<em class="fa fa-angle-up"></em></div>
<div class="second-arrow hidden-xs">
<hr />
<em class="fa fa-angle-down"></em></div>
<div class="third-arrow hidden-xs">
<hr />
<em class="fa fa-angle-up"></em></div>
<div class="fourth-arrow hidden-xs">
<hr />
<em class="fa fa-angle-down"></em></div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-lg-6">
<h4>discover why many of our clients choose our credit restoration services.</h4>
<p>at once again credit, we understand that improving your credit is a step by step process. depending on your unique situation, it can take 45 days to a few months to fix errors on your credit report. if you are serious about fixing your credit, give us a call today. many of our clients have experienced the following after working with us, and we can help you to:</p>
<p>build and maintain a good credit score<br /> qualify for loans<br /> feel secure about your financial future</p>
</div>
<div class="col-lg-6">
<h4>schedule a free consultation with one of our credit restoration specialists today!</h4>
<p>whether you are improving your credit, or fixing errors on your credit report, once again credit is here to help you every step of the way. we make it simple for you. just send us your credit report (s) and we will take care of the rest.</p>
<p>call us now at 1-800-730-3087 to learn more about how our credit restoration specialists can help you improve your credit score today</p>
</div>
</div>
</div>', 'yes', 1, '2014-12-31 13:51:51', 1, '2014-12-31 13:51:51', 3);
INSERT INTO content (content_id, content_title, content_description, content_status, created_by, created_date, updated_by, updated_Date, updated_count)
VALUES (29, 'how it works',
        '<p>american cpn uses ground breaking credit strategies to empower our clients. we give our clients the tools and the resources to greatly improve their credit and their lives. weather you own a large corporation or you are a housewife our experienced staff will guide you through business or personal credit strategies tailored to your personal financial goals. our services don''t stop when you place an order. as a client you are entitled to lifetime consulting. no other credit repair company offers this.<br /><br />when we obtain a cpn for you we also register your name as a small business (for additional fee) with the irs and send you your new ein along with your cpn. you will then receive an official letter from the irs confirming this. all you have to do is register your name as your business by filling it as a dba with your state. this is how the celebrities and the wealthy use cpn''s to protect their privacy. this is the only legal way to have a cpn. don&rsquo;t be fooled by people and companies on the internet selling cpn''s for little or nothing. you get what you pay for and you might get more than what you bargained for. do it the right way.<br /><br />call us today to legally set up your new cpn.</p>',
        'yes', 1, '2014-12-25 10:40:30', 1, '2014-12-25 10:40:30', 4);
INSERT INTO content (content_id, content_title, content_description, content_status, created_by, created_date, updated_by, updated_Date, updated_count)
VALUES (30, 'business opportunity', '<p><span style="color: #333333; font-family: arial, helvetica, sans-serif; font-size: medium;">for years, we have assisted hundreds of consumers to not only repair or delete erroneous information from their credit reports, but also to rebuild their credit, providing legal alternatives to increase their fico scores. credit repair is legal, it is the law!</span></p>
<p><span style="color: #333333; font-family: arial, helvetica, sans-serif; font-size: 17px;">our extensive experience in the credit repair field allows us to consistently increase our knowledge about credit repair strategies. we use this knowledge to dispute issues on our clients'' credit reports with a high level of success in the first attempt. our credit repair process includes the generation of "unique dispute letters", revised individually, which translates into better results from the first round of disputes.</span></p>
<p><span style="font-size: x-small;"><span style="font-size: x-small;"><span style="font-size: small;"> our highest level of credit repair service includes: </span></span></span></p>
<ul class="repair_services" style="float: left;">
<li style="list-style: none; float: none !important; margin: 0px 0px 10px; padding-left: 50px; background-image: url(http://onceagaincredit.cyberneticstechnology.com/images/liststyle.jpg) !important; background-attachment: scroll !important; background-color: transparent !important; background-position: 0px 0px !important; background-repeat: no-repeat no-repeat !important;"><span style="font-size: x-small;"><span style="font-size: x-small;"><span style="font-size: small;">ensuring that information in their credit reports is accurate.</span></span></span></li>
<li style="list-style: none; float: none !important; margin: 0px 0px 10px; padding-left: 50px; background-image: url(http://onceagaincredit.cyberneticstechnology.com/images/liststyle.jpg) !important; background-attachment: scroll !important; background-color: transparent !important; background-position: 0px 0px !important; background-repeat: no-repeat no-repeat !important;"><span style="font-size: x-small;"><span style="font-size: x-small;"><span style="font-size: small;">disputing erroneous items with the credit reporting agencies.</span></span></span></li>
<li style="list-style: none; float: none !important; margin: 0px 0px 10px; padding-left: 50px; background-image: url(http://onceagaincredit.cyberneticstechnology.com/images/liststyle.jpg) !important; background-attachment: scroll !important; background-color: transparent !important; background-position: 0px 0px !important; background-repeat: no-repeat no-repeat !important;"><span style="font-size: x-small;"><span style="font-size: x-small;"><span style="font-size: small;">developing a spending plan to lower debt and raise credit score.</span></span></span></li>
<li style="list-style: none; float: none !important; margin: 0px 0px 10px; padding-left: 50px; background-image: url(http://onceagaincredit.cyberneticstechnology.com/images/liststyle.jpg) !important; background-attachment: scroll !important; background-color: transparent !important; background-position: 0px 0px !important; background-repeat: no-repeat no-repeat !important;"><span style="font-size: x-small;"><span style="font-size: x-small;"><span style="font-size: small;">providing educational material that teaches you how to maintain a healthier credit score.</span></span></span></li>
<li style="list-style: none; float: none !important; margin: 0px 0px 10px; padding-left: 50px; background-image: url(http://onceagaincredit.cyberneticstechnology.com/images/liststyle.jpg) !important; background-attachment: scroll !important; background-color: transparent !important; background-position: 0px 0px !important; background-repeat: no-repeat no-repeat !important;"><span style="font-size: x-small;"><span style="font-size: x-small;"><span style="font-size: small;">if necessary, looking for new trade lines to increase your credit score (not included in the basic credit repair package).</span></span></span></li>
<li style="list-style: none; float: none !important; margin: 0px 0px 10px; padding-left: 50px; background-image: url(http://onceagaincredit.cyberneticstechnology.com/images/liststyle.jpg) !important; background-attachment: scroll !important; background-color: transparent !important; background-position: 0px 0px !important; background-repeat: no-repeat no-repeat !important;"><span style="font-size: x-small;"><span style="font-size: x-small;"><span style="font-size: small;">if necessary, request a rapid re-scoring of your fico score.</span></span></span></li>
</ul>
<p><span style="font-size: x-small;"><span style="font-size: small;">add trade lines to your credit report to increase your fico score.
if you need to increase your debt to income ratio (dti), we can also work on "trade lines". the goal is to provide your with the credit accounts required to boost your credit score, regardless of your credit history (the price of this service is not included in our basic credit repair service).</span></span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>', 'yes', 11, '2014-08-19 16:43:24', 11, '2014-08-19 16:43:24', 3);
INSERT INTO content (content_id, content_title, content_description, content_status, created_by, created_date, updated_by, updated_Date, updated_count)
VALUES (31, 'branch partner',
        '<p><br /><br />welcome to our branch parnter program. we offer different business opportunities for anyone whom may be interested in starting their own referrer. affiliate, broker, or "whatever name you choose to call it" cpn program.<br /><br /></p>',
        'yes', 1, '2014-12-25 10:41:09', 1, '2014-12-25 10:41:09', 4);
INSERT INTO content (content_id, content_title, content_description, content_status, created_by, created_date, updated_by, updated_Date, updated_count)
VALUES (32, 'testimonials',
        '<p>we understand that every credit situation is different. that is why we believe in creating a customized game plan specifically with your credit goals in mind. rest assured we employ the fastest, most effective approach to credit repair ? it''s nice to know you can expect progress every month.</p>',
        'yes', 1, '2014-12-31 14:44:27', 1, '2014-12-31 14:44:27', 3);
INSERT INTO content (content_id, content_title, content_description, content_status, created_by, created_date, updated_by, updated_Date, updated_count)
VALUES
  (33, 'sign up', '<p>please sign up into our account with the following form:</p>', 'yes', 11, '2014-08-19 16:40:15',
   11, '2014-08-19 16:40:15', 0);
INSERT INTO content (content_id, content_title, content_description, content_status, created_by, created_date, updated_by, updated_Date, updated_count)
VALUES (34, 'legal cpn',
        '<p>presently, federal law allows the ability for someone to legally use a private id # for financial reporting purposes instead of a social security number. title 5, section 7 of publication law 93-579 of government organization and employees act:<br /><br />(a) (1) it shall be unlawful for any federal, state or local government ?agency to deny any individual any right, benefit, or privilege provided by ?law because of such individual''s refusal to disclose his or her social ?security account number.<br /><br />the law states that no federal, state, or local government agency may deny you any right, privilege or benefit due to your refusal to provide your ss # for any other reason than producing money for retirement account with the social security administration, the irs and your employer today. credit bureaus are not legally allowed to "require" your social security number. in our country''s present credit reporting system a person may be assumed guilty and then must expend a great deal of time and resources to prove his or her innocence. additionally, once a negative item is in a credit file it may remain long past the 7 year time period most people believe is used. additionally, a misreported item can show up in a credit report multiple times.<br /><br />when it comes to credit, banking and loans, there are two things you must know. the first relates to the law pertaining to the usage of your social security number as an identification tool. the second, credit bureaus are private companies and are not affiliated with the government in any way, whatsoever. although, the credit bureaus would like you to think otherwise.<br />what all this means is federal law protects those who do not wish to disclose their personal information (ss#) except when required to do so. all that to say: instead of a social security number, with the right planning, you now have the opportunity to establish a credit privacy number (cpn), as it is your right to have one.<br /><br /><br />call today to get your second chance!</p>',
        'yes', 1, '2014-12-25 10:39:46', 1, '2014-12-25 10:39:46', 6);


INSERT INTO `homepage_slider` (`slider_id`, `slider_name`, `path`, `mimage`, `rimage`, `description`, `slider_index`, `publish`, `crtd_by`, `crtd_dt`, `updt_by`, `updt_dt`, `updt_cnt`)
VALUES (38, NULL, 'b115205fb7ffe905ad7d6c129eb59231.jpg', '66213cb3803a575781876607482ee51b.png',
        'd83eda859c83b827d3bc1f0002f6a60d.png', '<p><span style="color: #ffff00; font-size: xx-large;"><span style="color: #3366ff;">start dreaming</span></span></p>
<p><span style="font-size: xx-large;"><span style="color: #ff0000;"><span style="color: #3366ff;">it really works</span></span></span></p>',
        10, 'yes', '1', '2015-01-01', '', '2015-01-01', 4);
INSERT INTO `homepage_slider` (`slider_id`, `slider_name`, `path`, `mimage`, `rimage`, `description`, `slider_index`, `publish`, `crtd_by`, `crtd_dt`, `updt_by`, `updt_dt`, `updt_cnt`)
VALUES (30, NULL, '2d113aa43729462b23e4d60e51e59c00.jpg', '69795429ade83f9bdc7fd4fb8890c685.png',
        'd856b58cd4a5da57c7de9ddfcc0554b4.png', '<p>&nbsp;</p>
<p><span style="color: #3366ff; font-size: x-large;">never let go of your</span></p>
<p><span style="font-family: ''comic sans ms''; font-size: xx-large;"><span style="font-size: xx-large;"><span style="font-size: xx-large;"><span style="font-size: xx-large;"><span style="font-size: xx-large;"><span style="color: #3366ff;"><span style="font-size: xx-large;">dreams</span></span></span></span></span></span></span></p>
<p><span style="font-size: xx-small;"><span style="font-size: x-small;"><span style="font-size: large;"><span style="color: #3366ff;">fight to bring your dream to life</span></span></span></span></p>',
        2, 'yes', '1', '2015-01-01', '', '2015-01-01', 16);
INSERT INTO `homepage_slider` (`slider_id`, `slider_name`, `path`, `mimage`, `rimage`, `description`, `slider_index`, `publish`, `crtd_by`, `crtd_dt`, `updt_by`, `updt_dt`, `updt_cnt`)
VALUES (33, NULL, 'a276cbc8081125b1d3634854ca55a84e.jpg', '66275690152f0da7ec66328c6dcf4126.png',
        '44e0b69261ef5037f6406aaee5eca7b6.png',
        '<p><span style="color: #ff00ff; font-size: xx-large;"><span style="color: #3366ff;">happiness and joy to your family</span></span></p>',
        5, 'yes', '1', '2014-12-31', '', '2014-12-31', 4);
INSERT INTO `homepage_slider` (`slider_id`, `slider_name`, `path`, `mimage`, `rimage`, `description`, `slider_index`, `publish`, `crtd_by`, `crtd_dt`, `updt_by`, `updt_dt`, `updt_cnt`)
VALUES (34, NULL, 'abf4f82fd932c55a8421ad36d220a4e9.jpg', '95d898becdee20d0fa5ac3216cd7158a.png',
        '3254477902b9cf7c4dc619f681b0b294.png',
        '<p><span style="font-size: xx-large;"><span style="color: #3366ff;">start saying yes</span></span></p>', 6,
        'yes', '1', '2015-01-01', '', '2015-01-01', 10);
INSERT INTO `homepage_slider` (`slider_id`, `slider_name`, `path`, `mimage`, `rimage`, `description`, `slider_index`, `publish`, `crtd_by`, `crtd_dt`, `updt_by`, `updt_dt`, `updt_cnt`)
VALUES (37, NULL, '3e0a73e5fd92d82076b7c13552adec1e.jpg', 'acdc5cf053f275cc0536cd282facaa98.png',
        '05a0a6c86df87c89ae982034e269acc3.png',
        '<p><span style="color: #ff0000; font-size: xx-large;"><span style="color: #3366ff;">we set your dreams in our eyes&nbsp;</span></span></p>',
        9, 'yes', '1', '2014-12-31', '', '2014-12-31', 3);
INSERT INTO `homepage_slider` (`slider_id`, `slider_name`, `path`, `mimage`, `rimage`, `description`, `slider_index`, `publish`, `crtd_by`, `crtd_dt`, `updt_by`, `updt_dt`, `updt_cnt`)
VALUES (40, NULL, 'baaf1682e960d65ea94cbada9c408292.jpg', '2f38637db60def03080a30759810d4c4.jpg',
        'ad028010ccd474cf7296a7146aa6672a.png',
        '<p><span style="color: #3366ff; font-size: xx-large;">we make it happen and we are with you</span></p>', 12,
        'yes', '1', '2015-01-01', '', '2015-01-01', 1);
INSERT INTO `homepage_slider` (`slider_id`, `slider_name`, `path`, `mimage`, `rimage`, `description`, `slider_index`, `publish`, `crtd_by`, `crtd_dt`, `updt_by`, `updt_dt`, `updt_cnt`)
VALUES (39, NULL, '7943be6cfac5f5a0f8a1ea0c43560e29.jpg', '287e43715f989a4286a91d1883cc926e.png',
        'cb43c8cd82a3040d688bade136a2eb27.png',
        '<p><span style="font-size: xx-large;"><span style="color: #3366ff;">choose for the right option</span></span></p>',
        11, 'yes', '1', '2015-01-01', '', '2015-01-01', 3);

INSERT INTO `process` (`process_id`, `process_title`, `process_caption`, `process_description`) VALUES
  (1, 'free credit report evaluation', '',
   '<p><span>score planner is a tool to help you learn how your estimated credit score is calculated by seeing how different events or changes to your credit report may impact your credit score. the score planner uses the score planner is a tool to help you learn how your estimated credit score is calculated by seeing how different events or changes to your credit report may impact your credit score. the score planner uses the</span></p>');
INSERT INTO `process` (`process_id`, `process_title`, `process_caption`, `process_description`) VALUES
  (3, 'customized credit repair plan', '',
   '<p><span>score planner is a tool to help you learn how your estimated credit score is calculated by seeing how different events or changes to your credit report may impact your credit score. the score planner uses the score planner is a tool to help you learn how your estimated credit score is calculated by seeing how different events or changes to your credit report may impact your credit score. the score planner uses the</span></p>');
INSERT INTO `process` (`process_id`, `process_title`, `process_caption`, `process_description`) VALUES
  (4, 'send us any correspondence', '',
   '<p><span>score planner is a tool to help you learn how your estimated credit score is calculated by seeing how different events or changes to your credit report may impact your credit score. the score planner uses the score planner is a tool to help you learn how your estimated credit score is calculated by seeing how different events or changes to your credit report may impact your credit score. the score planner uses the</span></p>');
INSERT INTO `process` (`process_id`, `process_title`, `process_caption`, `process_description`) VALUES
  (5, 'view your progress online', '',
   '<p><span>score planner is a tool to help you learn how your estimated credit score is calculated by seeing how different events or changes to your credit report may impact your credit score. the score planner uses the score planner is a tool to help you learn how your estimated credit score is calculated by seeing how different events or changes to your credit report may impact your credit score. the score planner uses the</span></p>');

INSERT INTO `states` VALUES ('1', 'Alaska', 'AK');
INSERT INTO `states` VALUES ('2', 'Alabama', 'AL');
INSERT INTO `states` VALUES ('3', 'Arkansas', 'AR');
INSERT INTO `states` VALUES ('4', 'Arizona', 'AZ');
INSERT INTO `states` VALUES ('5', 'California', 'CA');
INSERT INTO `states` VALUES ('6', 'Colorado', 'CO');
INSERT INTO `states` VALUES ('7', 'Connecticut', 'CT');
INSERT INTO `states` VALUES ('8', 'District of Columbia', 'DC');
INSERT INTO `states` VALUES ('9', 'Delaware', 'DE');
INSERT INTO `states` VALUES ('10', 'Florida', 'FL');
INSERT INTO `states` VALUES ('11', 'Georgia', 'GA');
INSERT INTO `states` VALUES ('12', 'Hawaii', 'HI');
INSERT INTO `states` VALUES ('13', 'Iowa', 'IA');
INSERT INTO `states` VALUES ('14', 'Idaho', 'ID');
INSERT INTO `states` VALUES ('15', 'Illinois', 'IL');
INSERT INTO `states` VALUES ('16', 'Indiana', 'IN');
INSERT INTO `states` VALUES ('17', 'Kansas', 'KS');
INSERT INTO `states` VALUES ('18', 'Kentucky', 'KY');
INSERT INTO `states` VALUES ('19', 'Louisiana', 'LA');
INSERT INTO `states` VALUES ('20', 'Massachusetts', 'MA');
INSERT INTO `states` VALUES ('21', 'Maryland', 'MD');
INSERT INTO `states` VALUES ('22', 'Maine', 'ME');
INSERT INTO `states` VALUES ('23', 'Michigan', 'MI');
INSERT INTO `states` VALUES ('24', 'Minnesota', 'MN');
INSERT INTO `states` VALUES ('25', 'Missouri', 'MO');
INSERT INTO `states` VALUES ('26', 'Mississippi', 'MS');
INSERT INTO `states` VALUES ('27', 'Montana', 'MT');
INSERT INTO `states` VALUES ('28', 'North Carolina', 'NC');
INSERT INTO `states` VALUES ('29', 'North Dakota', 'ND');
INSERT INTO `states` VALUES ('30', 'Nebraska', 'NE');
INSERT INTO `states` VALUES ('31', 'New Hampshire', 'NH');
INSERT INTO `states` VALUES ('32', 'New Jersey', 'NJ');
INSERT INTO `states` VALUES ('33', 'New Mexico', 'NM');
INSERT INTO `states` VALUES ('34', 'Nevada', 'NV');
INSERT INTO `states` VALUES ('35', 'New York', 'NY');
INSERT INTO `states` VALUES ('36', 'Ohio', 'OH');
INSERT INTO `states` VALUES ('37', 'Oklahoma', 'OK');
INSERT INTO `states` VALUES ('38', 'Oregon', 'OR');
INSERT INTO `states` VALUES ('39', 'Pennsylvania', 'PA');
INSERT INTO `states` VALUES ('40', 'Rhode Island', 'RI');
INSERT INTO `states` VALUES ('41', 'South Carolina', 'SC');
INSERT INTO `states` VALUES ('42', 'South Dakota', 'SD');
INSERT INTO `states` VALUES ('43', 'Tennessee', 'TN');
INSERT INTO `states` VALUES ('44', 'Texas', 'TX');
INSERT INTO `states` VALUES ('45', 'Utah', 'UT');
INSERT INTO `states` VALUES ('46', 'Virginia', 'VA');
INSERT INTO `states` VALUES ('47', 'Vermont', 'VT');
INSERT INTO `states` VALUES ('48', 'Washington', 'WA');
INSERT INTO `states` VALUES ('49', 'Wisconsin', 'WI');
INSERT INTO `states` VALUES ('50', 'West Virginia', 'WV');
INSERT INTO `states` VALUES ('51', 'Wyoming', 'WY');

INSERT INTO module (id, module_name, module_controller) VALUES (1, 'content', 'content');
INSERT INTO module (id, module_name, module_controller) VALUES (3, 'contact', 'contact');
INSERT INTO module (id, module_name, module_controller) VALUES (4, 'home', 'home');
INSERT INTO module (id, module_name, module_controller) VALUES (5, 'register', 'register');
INSERT INTO module (id, module_name, module_controller) VALUES (6, 'faq', 'faq');
INSERT INTO module (id, module_name, module_controller) VALUES (7, 'forum', 'forum');

INSERT INTO `role` (`id`, `name`, `label`, `public`) VALUES (1, 'user', 'User', 0);
INSERT INTO `role` (`id`, `name`, `label`, `public`) VALUES (2, 'client', 'Client', 1);
INSERT INTO `role` (`id`, `name`, `label`, `public`) VALUES (3, 'owner', 'Owner', 1);
INSERT INTO `role` (`id`, `name`, `label`, `public`) VALUES (4, 'referrer', 'referrer', 1);
INSERT INTO `role` (`id`, `name`, `label`, `public`) VALUES (5, 'broker', 'Broker', 1);
INSERT INTO `role` (`id`, `name`, `label`, `public`) VALUES (6, 'super_broker', 'Super Broker', 0);
INSERT INTO `role` (`id`, `name`, `label`, `public`) VALUES (7, 'admin', 'Admin', 0);
INSERT INTO `role` (`id`, `name`, `label`, `public`) VALUES (8, 'super_admin', 'Super Admin', 0);


INSERT INTO auth (id, name, label) VALUES (1, 'user_create', 'Create User');
INSERT INTO auth (id, name, label) VALUES (2, 'read_create', 'View User');
INSERT INTO auth (id, name, label) VALUES (3, 'update_create', 'Update User');
INSERT INTO auth (id, name, label) VALUES (4, 'delete_create', 'Delete User');

INSERT INTO user (id, email, password, status, last_login_date, created_date)
VALUES (1, 'root@tejtech.com', '5f4dcc3b5aa765d61d8327deb882cf99', 1, current_timestamp,
        current_timestamp);
-- default password is 'password'

INSERT INTO user_role (user_id, role_id, status) VALUES (1, 8, 1);
INSERT INTO user_role (user_id, role_id, status) VALUES (1, 5, 1);
INSERT INTO profile (user_id, ssn, first_name, middle_initial, last_name, gender, dob, primary_phone_number, secondary_phone_number, address_id, cpn, comment)
VALUES (1, NULL, 'Tej', NULL, 'Technology', 'M', current_timestamp, NULL, NULL, NULL, NULL, NULL);










