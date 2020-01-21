@extends('layouts.app')

@section('title', 'Terms and Conditions')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('/images/terms-and-conditions-header.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">Terms and Conditions</h1>
                    <p class="breadcrumbs">
                        <span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span>
                        <span>Terms and Conditions <i class="ion-ios-arrow-forward"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-counter ftco-section ftco-no-pt ftco-no-pb img" id="section-counter">
        <div class="container">
            <div class="row">
                <div class="col-md-12 py-5">
                    <div class="row justify-content-start pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <h2 class="mb-4"><span>Terms and Conditions</span></h2>
                            <p>Thank you for visiting {{ $_SERVER['SERVER_NAME'] }} (the "Site"). This document sets forth the terms adn conditions that apply to each visitor ("User" or "You") to the Site.</p>
                            <p>The effective date of this Terms and Conditions of Use agreement ("Agreement") is Jan 21, 2020.</p>
                            <p>The Site is owned by KD Home Services, LLC ("KDHS" or "We"). We provide this Site and related services to you subject to your acceptance of and compliance with this Agreement. Please read the Agreement carefully before using the Site and/or services. <strong>Your use of this Site and the associated services confirms your unconditional acceptance of these terms and conditions</strong>. If you do not accept these terms and conditions, do not use this Site. No access to any proprietary drawings, specifications, modeling programs or other resources developed by or for the benefit of KDHS will be granted without your acceptance of these terms.</p>

                            <h4 class="mb-4"><span>Changes to This Agreement</span></h4>
                            <p>We reserve the right, at our sole discretion, to revise this Agreement at any time. Any changes to these terms will be included in a revised version of this Agreement accessible through this Site. Your continued use of the Site and any related services following posting of any changes to this Agreement constitutes your unconditional acceptance an agreement to be bound by the changed terms. You must cease using the Site if you do not agree to be bound by the revised terms and conditions.</p>

                            <h4 class="mb-4"><span>Privacy Information</span></h4>
                            <p>By using this Site, you consent to our collection and use of personal information as set forth in our Privacy Policy, which is hereby incorporated into this Agreement. By subscribing to our email list, you consent to our sending you emails with information and special offers from KDHS. You may opt-out of receiving these emails at any time by emailing us at garageblogger@gmail.com or clicking the "UNSUBSCRIBE" link in any email We send you.</p>

                            <h4 class="mb-4"><span>General Use and Site License</span></h4>
                            <p>All Users are invited to display the information, content or advertisements (the "Materials") contained on this Site on a single monitor of a computer or on the screen of any other device accessing this Site over the Internet ("Display").</p>
                            <p>With the exception of permitted Display set forth above, you man not, without our express written consent, copy, download, modify, distribute, transmit, publish, create derivative works from, print or sell any Licenced Property for any reason or for any purpose.</p>
                            <p>You acknowledge that any reliance upon the Licenced Property shall be at your risk, except as otherwise required by law. We reserve the right, at our sole discretion, and without obligation, to correct any error or omission in any Materials on this Site or to change any information without notice.</p>
                            <p>You acknowledge that your use of the Site is at our sole discretion, and your license to use the Site may be terminated by us at any time, for any reason. Following termination of this License, (i) you must immediately destroy all copies you have made of any Materials, regardless of format, (ii) you will not make any new use of the Licenced Property, and (iii) you agree that the terms of this Agreement shall still apply to the extent practicable.</p>

                            <h4 class="mb-4"><span>Registration - User Accounts</span></h4>
                            <p>Before you access certain areas of the Site or make use of certain services associated with the Site, you must become a registered user and create a user account. You agree and warrant that all information you provide to us through this Site, including any contract or other registration information, is truthful and accurate. You acknowledge that the use of username and password is an adequate form of security to protect your user account and all information associated therewith.</p>
                            <p>You agree to accept responsibility for all activities that occur under your account, including but not limited to any harm to our Site or computer resources caused by anyone using your account. You agree that you will not disclose your user name or account password to others or allow others to access your account. We are neither responsible for nor liable for any loss or other injury that you may incur as a result of someone else using your user account or password, either with or without your knowledge.</p>

                            <h4 class="mb-4"><span>Submission of Content - User Activity</span></h4>
                            <p>Our Site may have features that allow users to upload materials to the Site or to our servers. You understand that all information, communications, data, text, software, music, sound, photographs, graphics, video, messages, or other materials ("Content") are the sole responsibility of the person from which such Content originated. This means that you, are entirely responsible for all Content that you upload, transmit, or otherwise make available through the Site or any associated services.</p>
                            <p>You represent and warrant that you own or otherwise control the rights to any Content that you upload, transmit or otherwise make available through the Site; that use of the Content you provide does not violate the intellectual property rights or any other rights of any third parties, and that use of the Content you provide will not cause injury to any person or entity. In line with, and without limiting, the foregoing, you specifically agree that you will not (a) provide any Content that is unlawful (according to local, state, federal, or international law), that you will not (b) provide any Content that is defamatory, false, or libelous, or that contains unlawful, harmful, threatening, harassing, discriminatory, abusive, profane, phonographic, or obscene material; (c) provide any Content that you do not have a right to provide under intellectual property or other law or under a contractual or fiduciary relationship; (d) provide any Content that contains software viruses or other harmful devices; or (e) impersonate any other person or entity or forge headers or otherwise manipulate identifiers in order to disguise the origin of any Content you provide.</p>
                            <p>You hereby grant us a royalty-free, non-exclusive right and license, perpetual and irrevocable, to use and display the Content to provide you services on the Site.</p>

                            <h4 class="mb-4"><span>Copyright & Trademarks</span></h4>
                            <p>All of the Materials on this Site, are protected and applicable copyright laws, and their use is subject to the terms set forth herein. The trademarks, logos and service marks displayed on this Site (collectively the "Marks"), are the property of KDHS or third parties. Nothing contained on this Site may be construed as granting, by implication, estoppel, or otherwise, any right or license to use any Mark. You agree that you will not take any actions inconsistent with our ownership of the Marks used on this Site.</p>

                            <h4 class="mb-4"><span>Indemnity</span></h4>
                            <p>You agree to indemnify and hold CBPC and its affiliates harmless from and against any and all claims, losses, liability, costs, and expenses (including, but not limited to, attorneys’ fees) arising from your misuse of the Licensed Property or other violation or breach of this Agreement, arising from your violation of any third party’s rights including, but not limited to, copyrights, proprietary and privacy rights, or arising from your violation of any applicable federal, state or local law, regulation or ordinance. This indemnification and hold harmless obligation will survive the termination of any rights granted under this Agreement.</p>

                            <h4 class="mb-4"><span>Applicable Law</span></h4>
                            <p>This Site is created and maintained by KDHS in the State of California. We make no representation that the Site or any of its content is appropriate or available for use outside the United States of America. You agree that you are solely responsible for compliance with applicable local laws connected with your use of the Site.</p>
                            <p>Your access to and use of this Site and any Materials available on or through this Site are subject to and shall be governed by and construed in accordance with all applicable federal laws of the United States and applicable laws of the State of California and local governmental entities.</p>
                            <p>You irrevocably consent to the exclusive jurisdiction of the courts of the State of California and the federal courts situated in the State of California in connection with any action arising under or in connection with this Agreement or relating to the User’s access of this Site, or any Materials available on or through this Site. You further agree to file any cause of action with respect to this Agreement within one year after the cause of action arise, and agree that a cause of action filed after this date is barred.</p>

                            <h4 class="mb-4"><span>Copyright Infringement Claims</span></h4>
                            <p>We respect the intellectual property rights of third parties, and comply with the terms of the Digital Millennium Copyright Act (DMCA) regarding such rights. We reserve the right to remove access to infringing material posted to the Site. Such actions do not affect or modify any other rights we may have under law or contract.</p>
                            <p>If you believe that any portion of the material contained on this Site infringes your copyright, notify us of your claim in accordance with the following procedure. We will take appropriate action as required by the Digital Millennium Copyright Act (DMCA), 17 U.S.C. § 512(c)(3).</p>
                            <p>Written Notification must be submitted to: </p>
                            <address>
                                KD Home Services<br>
                                14749 Victory Blvd. STE 205 B<br>
                                Van Nuys, CA 91401<br>
                                (000) 000-0000<br>
                                garageblogger@gmail.com
                            </address>
                            <p>To be effective, the Notification must be in writing and contain the following information:</p>
                            <ul>
                                <li>A physical or electronic signature of a person authorized to act on behalf of the owner of an exclusive right that is allegedly infringed</li>
                                <li>Identification of the copyrighted work claimed to have been infringed or, if multiple copyrighted works at a single online site are covered by a single notification, a representative list of such works at that site</li>
                                <li>Identification of the material that is claimed to be infringing or to be the subject of infringing activity and that is to be removed or access to which is to be disabled, and information reasonably sufficient to permit the service provider to locate the material</li>
                                <li>Information reasonably sufficient to permit the service provider to contact the complaining party, such as an address, telephone number, and, if available, an electronic mail address at which the complaining party may be contacted</li>
                                <li>A statement that the complaining party has a good faith belief that use of the material in the manner complained of is not authorized by the copyright owner, its agent, or the law</li>
                                <li>A statement that the information in the notification is accurate and, under penalty of perjury, that the complaining party is authorized to act on behalf of the owner of an exclusive right that is allegedly infringed</li>
                            </ul>
                            <p>Upon receipt of the written Notification containing the information outlined above, we will:</p>
                            <ul>
                                <li>Remove or disable access to the material that is alleged to be infringing</li>
                                <li>Forward the written notification to such alleged infringer</li>
                                <li>Take reasonable steps to promptly notify the alleged infringer that it has removed or disabled access to the material</li>
                            </ul>
                            <p>A Counter Notification will be effective if in writing, provided to the Designated Agent, and including substantially the following:</p>
                            <ul>
                                <li>A physical or electronic signature of the alleged infringer</li>
                                <li>Identification of the material that has been removed or to which access has been disabled and the location at which the material appeared before it was removed or access to it was disabled</li>
                                <li>A statement under penalty of perjury that the alleged infringer has a good faith belief that the material was removed or disabled as a result of mistake or misidentification of the material to be removed or disabled</li>
                                <li>The alleged infringer’s name, address, and telephone number, and a statement that the alleged infringer consents to jurisdiction of Federal District Court for the judicial district in which the address is located or, if outside of the United States, for any judicial district in which KDHS may be found, and that the alleged infringer will accept service of process from the person who provided notification or the agent of such person</li>
                            </ul>
                            <p>Upon receipt of a Counter Notification containing the information outlined above, we will:</p>
                            <ul>
                                <li>promptly provide the complaining party with a copy of the Counter Notification</li>
                                <li>inform the complaining party that it will replace the removed material within ten (10) to fourteen (14) business days following the receipt of the Counter Notification, provided our Designated Agent has not received notice from the complaining party that an action has been filed seeking a court order to restrain alleged infringer from engaging in infringing activity relating to the material on our network or system</li>
                            </ul>
                            <p>This process only relates to reporting a claim of copyright infringement.  Messages related to other matters will not receive a response through this process.</p>

                            <h4 class="mb-4"><span>Contact Information</span></h4>
                            <address>
                                KD Home Services<br>
                                14749 Victory Blvd. STE 205 B<br>
                                Van Nuys, CA 91401<br>
                                (000) 000-0000<br>
                                garageblogger@gmail.com
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
