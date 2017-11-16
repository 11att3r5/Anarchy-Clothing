#!/usr/bin/perl -w
#print &PrintHeader;
use CGI;                             
$co = new CGI;                        
print $co->header,                    
$co->start_html
(
    -title=>'Anarchy', 
    -author=>'Anarchy', 
    -BGCOLOR=>'white', 
    -LINK=>'red'
);

if ($co->param()) {
    $from = $co->param('email');
    $from =~ s/@/\@/; 
    $subject = $co->param('subject');
    $text = $co->param('text');
    $text =~ s/</&lt;/g;
    open(MAIL, '| /usr/lib/sendmail -t -oi');
    print MAIL <<EOF;
To: webdevteacher\@gmail.com
From: $from
Subject: $subject
$text
EOF
    close MAIL;
}