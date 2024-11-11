@extends('website.layout.app')
@section('title', 'Term- Terms & Conditions')
@section('style')
<style>
    .privacy{
  color: var(--navbar-text);
  width: 75%;
  margin: auto;
  padding-top: 150px;
  text-align: start;
  padding-bottom: 100px;
  
}
.privacy h2{
  font-size: 30px;
  font-weight: 700;
  margin-bottom: 15px;
}
.privacy h5{
  font-size: 25px;
  font-weight: 600;
  margin-bottom: 5px;
}
.privacy h3{
  font-size: 22px;
  font-weight: 600;
  margin-top:20px;
}
.privacy p{
  font-size: 16px;
  font-weight: 400;
  padding-left: 15px;
  margin-top: 5px;
  width: 90%;
}
@media(max-width:1100px){
  .privacy{
    width: 85%;
  }
  .privacy h2{
    font-size: 25px;
  }
  .privacy h5{
    font-size: 20px;
  }
  .privacy h3{
    font-size: 18px;
  }
  .privacy p{
    font-size: 14px;
  }
}
@media(max-width:767px){
  .privacy{
    width: 85%;
  }
  .privacy h2{
    font-size: 20px;
  }
  .privacy h5{
    font-size: 15px;
  }
  .privacy h3{
    font-size: 15px;
  }
  .privacy p{
    font-size: 13px;
    width: 93%;
  }
}
</style>
@endsection
@section('content')
<div class="contain">
    @include('website.layout.fixed_div')
    <div class='privacy'>
        <h2>Terms and Conditions</h2>
        <h5>Effective Date: 07 November 2024</h5>
        <p>Welcome to TERM.ae! These Terms and Conditions (“Terms”)
            govern your access to and use of the TERM.ae website, products,
            and services (collectively, “Services”). By accessing or using our
            Services, you agree to comply with these Terms. If you do not
            agree to these Terms, please refrain from using our Services.
        </p>
        <h3>1. Acceptance of Terms</h3>
        <p>By accessing or using TERM.ae, you confirm that you have read,
            understood, and agreed to these Terms and all applicable laws.
            These Terms form a legally binding agreement between you
            (“User”) and TERM.ae (“Company,” “we,” “us,” or “our”).
        </p>
        <h3>2. Changes to Terms</h3>
        <p>TERM.ae reserves the right to modify or update these Terms at
            any time. Any changes will be posted here, with the “Effective
            Date” updated accordingly. We encourage you to review these
            Terms periodically. Your continued use of our Services after
            changes have been made constitutes acceptance of the updated
            Terms.
        </p>
        <h3>3. Use of Services</h3>
        <p>You may use TERM.ae’s Services only for lawful purposes and in
            accordance with these Terms. By using our Services, you agree
            not to:<br />
            • Violate any applicable local, national, or international law.<br />
            • Engage in fraudulent, abusive, or illegal activities.<br />
            • Upload, post, or transmit any content that is defamatory,
            obscene, or infringing on third-party rights.<br />
            • Attempt to gain unauthorized access to our systems or interfere
            with the proper functioning of the Services.<br />
            • Use any automated means (e.g., robots, spiders) to access the
            Services without prior written permission.<br />
            Failure to comply with these terms may result in the suspension
            or termination of your access to TERM.ae.
        </p>
        <h3>4. Account Registration and Security</h3>
        <p>Certain features of TERM.ae may require registration. If you
            create an account, you agree to:<br />
            • Provide accurate and up-to-date information.<br />
            • Maintain the confidentiality of your account credentials.<br />
            • Notify us immediately of any unauthorized access or breach of
            security.<br />
            You are responsible for any activity that occurs under your
            account. TERM.ae is not liable for any loss or damage resulting
            from unauthorized access to your account.
        </p>
        <h3>5. Intellectual Property</h3>
        <p>All content, materials, and Services provided on TERM.ae,
            including text, graphics, logos, and software, are the intellectual
            property of TERM.ae and are protected by copyright, trademark,
            and other intellectual property laws.<br />
            • Permitted Use: You may access, view, and print content for
            personal, non-commercial use only.<br />
            • Prohibited Use: You may not modify, reproduce, distribute,
            sell, or create derivative works based on TERM.ae’s content
            without our express written permission.<br />
            Violating these terms may result in legal action to protect our
            intellectual property rights.
        </p>
        <h3>6. User-Generated Content</h3>
        <p>If you submit, post, or share any content on TERM.ae, including
            reviews, comments, or other materials, you grant TERM.ae a non-
            exclusive, royalty-free, worldwide, perpetual license to use,
            display, distribute, and reproduce such content in connection with
            our Services.<br />
            By posting content, you confirm that:<br />
            • You own or have the rights to the content.<br />
            • The content is accurate and does not violate any laws or third-
            party rights.<br />
            TERM.ae reserves the right to remove or edit user-generated
            content that violates these Terms or is deemed inappropriate.
        </p>
        <h3>7. Third-Party Links</h3>
        <p>Our website may contain links to third-party websites or services.
            These links are provided for convenience only and do not imply
            endorsement by TERM.ae. We have no control over and are not
            responsible for the content, privacy policies, or practices of any
            third-party sites. Accessing third-party links is at your own risk,
            and we encourage you to review the terms and privacy policies of
            any third-party website.
        </p>
        <h3>8. Privacy Policy</h3>
        <p>Our use of personal information is governed by our Privacy Policy.
            By using TERM.ae, you acknowledge and agree to the collection,
            use, and sharing of your information as described in our Privacy
            Policy.
        </p>
        <h3>9. Disclaimer of Warranties</h3>
        <p>TERM.ae’s Services are provided “as is” and “as available,”
            without any warranties or guarantees of any kind, either express
            or implied, including but not limited to warranties of
            merchantability, fitness for a particular purpose, or non-
            infringement. We do not warrant that the Services will be
            uninterrupted, error-free, or secure.
        </p>
        <h3>10. Limitation of Liability</h3>
        <p>To the fullest extent permitted by law, TERM.ae shall not be liable
            for any direct, indirect, incidental, special, or consequential
            damages arising from your use or inability to use our Services,
            including, but not limited to, loss of data, profits, or business
            opportunities.<br />
            If, despite these exclusions, TERM.ae is found liable for any
            damage or loss, our aggregate liability will be limited to the
            amount you paid for using our Services, if any, during the six (6)
            months prior to the event giving rise to the liability.
        </p>
        <h3>11. Indemnification</h3>
        <p>You agree to indemnify, defend, and hold harmless TERM.ae, its
            affiliates, officers, directors, employees, and agents from and
            against any claims, liabilities, damages, losses, or expenses
            arising from your use of the Services, violation of these Terms, or
            infringement of any intellectual property or other rights of
            TERM.ae or third parties.</p>
        <h3>12. Termination</h3>
        <p>TERM.ae reserves the right to suspend or terminate your access
            to the Services at any time, without notice or liability, if we
            believe you have violated these Terms or are engaged in
            unauthorized activities.
        </p>
        <h3>13. Governing Law and Dispute Resolution</h3>
        <p>These Terms shall be governed by and construed in accordance
            with the laws of the United Arab Emirates. Any disputes arising
            from or relating to these Terms shall be resolved exclusively in
            the competent courts of the UAE.
        </p>
        <h3>14. Severability</h3>
        <p>If any provision of these Terms is found to be invalid or
            unenforceable, the remaining provisions shall continue in full
            force and effect.
        </p>
        <h3>Contact Us</h3>
        <p>If you have any questions or concerns regarding these Terms,
            please contact us at:<br />
            <span>Email:</span> <span><a>support@term.ae</a></span><br />
            <span>Mailing Address:</span> TERM.ae, Office 2210 Concord Tower, Dubai
            Media City, Dubai, UAE.
        </p>
    </div>
</div>
@endsection