<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    /* Riscrivere questa pagina del sito google https://policies.google.com/faq.
        Ci sono diverse domande con relative risposte.
        Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP. */

    $faq = [
        [
            'question' => 'How are you implementing the recent Court of Justice of the European Union (CJEU) decision on the right to be forgotten?',

            'answer' => [
                'The recent ruling by the Court of Justice of the European Union has profound consequences for search engines in Europe. The court found that certain users have the right to ask search engines like Google to remove results for queries that include the person\'s name. To qualify, the results shown would need to be inadequate, irrelevant, no longer relevant, or excessive.',

                'Since this ruling was published on 13 May 2014, we\'ve been working around the clock to comply. This is a complicated process because we need to assess each individual request and balance the rights of the individual to control his or her personal data with the public\'s right to know and distribute information.',

                'If you have a removal request, please fill out this web form. You\'ll receive an automatic reply confirming that we have received your request. We will then assess your case – please note that this may take some time because we have already received many such requests. In evaluating your request, we will look at whether the results include outdated information about your private life. We\'ll also look at whether there\'s a public interest in the information remaining in our search results – for example, if it relates to financial scams, professional malpractice, criminal convictions or your public conduct as a government official (elected or unelected). These are difficult judgements and as a private organisation, we may not be in a good position to decide on your case. If you disagree with our decision you can contact your local DPA.',

                'We look forward to working closely with data protection authorities and others over the coming months as we refine our approach. The CJEU\'s ruling constitutes a significant change for search engines. While we are concerned about its impact, we also believe that it\'s important to respect the Court\'s judgement and we are working hard to devise a process that complies with the law.',

                'When you search for a name, you may see a notice that says that results may have been modified in accordance with data protection law in Europe. We’re showing this notice in Europe when a user searches for most names, not just pages that have been affected by a removal.'
            ]
        ],
        [
            'question' => 'How does Google protect my privacy and keep my information secure?',

            'answer' => [
                'We know security and privacy are important to you - and they are important to us, too. We make it a priority to provide strong security and give you confidence that your information is safe and accessible when you need it.',

                'We’re constantly working to ensure strong security, protect your privacy, and make Google even more effective and efficient for you. We spend hundreds of millions of dollars every year on security, and employ world-renowned experts in data security to keep your information safe. We also built easy-to-use privacy and security tools like Google Dashboard, 2-step verification and Ads Settings. So when it comes to the information you share with Google, you’re in control.',

                'You can learn more about safety and security online, including how to protect yourself and your family online, at the Google Safety Center.',

                'Learn more about how we keep your personal information private and safe — and put you in control..'
            ]
        ],
        [
            'question' => 'Why is my account associated with a country?',

            'answer' => [
                'Your account is associated with a country (or territory) in the Terms of Service so that we can determine two things:',

                'The Google affiliate that provides the services, that processes your information, and that is responsible for complying with applicable privacy laws. Generally, Google offers its consumer services through either of two companies:',

                'Google Ireland Limited, if you’re located in the European Economic Area (EU countries plus Iceland, Liechtenstein, and Norway) or Switzerland',

                'Google LLC, based in the United States, for the rest of the world',

                'The version of the terms that govern our relationship, which can vary depending on local laws',

                'Keep in mind that Google services are essentially the same regardless of the affiliate that provides the services or your country association.',

                'Determining the country associated with your account',

                'When you create a new account, we associate your account with a country based on where you created your Google Account. For accounts at least a year old, we use the country from which you usually access Google services — typically where you’ve spent the most time in the last year.',

                'Frequent travel doesn’t generally affect the country associated with your account. If you move to a new country, it can take about a year for your country association to update.',

                'If the country associated with your account doesn’t correspond to your country of residence, it could be because of a difference between your country of work and residence, because you’ve installed a Virtual Private Network (VPN) to mask your IP address, or because you live close to a territorial border. Contact us if you think your country association is wrong.',
            ]
        ],

        [
            'question' => 'How can I remove information about myself from Google\'s search results?',

            'answer' => [

                'Google search results are a reflection of the content publicly available on the web. Search engines can\'t remove content directly from websites, so removing search results from Google wouldn\'t remove the content from the web. If you want to remove something from the web, you should contact the webmaster of the site the content is posted on and ask him or her to make a change. Additionally, if under European data protection law, you would like to request removal of certain information about you that appears in Google\'s search results, please click here. Once the content has been removed and Google has noted the update, the information will no longer appear in Google\'s search results. If you have an urgent removal request, you can also visit our help page for more information.',

            ]
        ],

        [
            'question' => 'Are my search queries sent to websites when I click on Google Search results?',

            'answer' => [
                'In some cases, yes. When you click on a search result in Google Search, your web browser also may send the Internet address, or URL, of the search results page to the destination webpage as the Referrer URL. The URL of the search results page may sometimes contain the search query you entered. If you are using SSL Search (Google’s encrypted search functionality), under most circumstances, your search terms will not be sent as part of the URL in the Referrer URL. There are some exceptions to this behavior, such as if you are using some less popular browsers. More information on SSL Search can be found here. Search queries or information contained in the Referrer URL may be available via Google Analytics or an application programming interface (API). In addition, advertisers may receive information relating to the exact keywords that triggered an ad click.'
            ]
        ]
    ];

    ?>

    <header>
        <div class="container">
            <div class="row">
                <a href="#">
                    <img src="data:image/png;base64,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" alt="google logo">
                </a>
                <a class="privacy-link" href="#">Privacy & Terms</a>
            </div>
        </div>

        <div class="row">
            <nav>
                <ul class=nav-list>
                    <li>
                        <button class="nav-list--button">Overview</button>
                    </li>

                    <li>
                        <button class="nav-list--button">Privacy Policy</button>
                    </li>

                    <li>
                        <button class="nav-list--button">Terms of Service</button>
                    </li>

                    <li>
                        <button class="nav-list--button">Technologies</button>
                    </li>

                    <li>
                        <button class="nav-list--button active">FAQ</button>
                    </li>
                </ul>
            </nav>

            <a href="">Google Account</a>
        </div>

        </div>
    </header>

    <main>
        <div class="container">
            <ul class="faq-list">
                <?php foreach ($faq as $item) { ?>
                    <li>
                        <h2 class="faq-list-title"> <?php echo $item['question']; ?> </h2>

                        <div class="faq-list">
                            <?php foreach ($item['answer'] as $paragraph) { ?>
                                <p class="faq-list-text">
                                    <?php echo $paragraph ?>
                                </p>
                            <?php } ?>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </main>

    <footer>
        <div class="container">
            <nav class="footer-nav">
                <li>
                    <a href="">Google</a>
                </li>

                <li>
                    <a href="">About Google</a>
                </li>

                <li>
                    <a href="">Privacy</a>
                </li>

                <li>
                    <a href="">Terms</a>
                </li>
            </nav>

            <div class="language">
                <select name="" id="">
                    <option value="english">English (United Kingdom)</option>
                </select>
            </div>
        </div>
    </footer>

    <style>

    </style>

</body>

</html>