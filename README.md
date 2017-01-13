# ICRFuzzer
A tiny php script to fuzz Internet Connection Records also known as ICR's

The included CSV file is based of the top 1000 sites by Alexa, you can use any CSV file, the one provided is just an example. For instance [Cisco Unbrella](http://s3-us-west-1.amazonaws.com/umbrella-static/index.html) or [Domain Punch](https://domainpunch.com/tlds/topm.php)

A working example can be seen hosted here: [Privacy International](https://www.privacyinternational.org/node/993)

I've tried to add some precautions against it but there is literally nothing stopping a remote site potentionally hijacking data or cookies. This is a proof of concept and a method of data pollution, not a security tool.

## USE AT YOUR OWN RISK
