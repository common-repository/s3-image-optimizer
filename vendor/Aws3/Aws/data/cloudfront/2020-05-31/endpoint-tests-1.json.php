<?php

namespace S3IO\Aws3;

// This file was auto-generated from sdk-root/src/data/cloudfront/2020-05-31/endpoint-tests-1.json
return ['testCases' => [['documentation' => 'For region aws-global with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['properties' => ['authSchemes' => [['name' => 'sigv4', 'signingName' => 'cloudfront', 'signingRegion' => 'us-east-1']]], 'url' => 'https://cloudfront.amazonaws.com']], 'params' => ['Region' => 'aws-global', 'UseDualStack' => \false, 'UseFIPS' => \false]], ['documentation' => 'For region aws-global with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['properties' => ['authSchemes' => [['name' => 'sigv4', 'signingName' => 'cloudfront', 'signingRegion' => 'us-east-1']]], 'url' => 'https://cloudfront-fips.amazonaws.com']], 'params' => ['Region' => 'aws-global', 'UseDualStack' => \false, 'UseFIPS' => \true]], ['documentation' => 'For region us-east-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://cloudfront-fips.us-east-1.api.aws']], 'params' => ['Region' => 'us-east-1', 'UseDualStack' => \true, 'UseFIPS' => \true]], ['documentation' => 'For region us-east-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['properties' => ['authSchemes' => [['name' => 'sigv4', 'signingName' => 'cloudfront', 'signingRegion' => 'us-east-1']]], 'url' => 'https://cloudfront-fips.amazonaws.com']], 'params' => ['Region' => 'us-east-1', 'UseDualStack' => \false, 'UseFIPS' => \true]], ['documentation' => 'For region us-east-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://cloudfront.us-east-1.api.aws']], 'params' => ['Region' => 'us-east-1', 'UseDualStack' => \true, 'UseFIPS' => \false]], ['documentation' => 'For region us-east-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['properties' => ['authSchemes' => [['name' => 'sigv4', 'signingName' => 'cloudfront', 'signingRegion' => 'us-east-1']]], 'url' => 'https://cloudfront.amazonaws.com']], 'params' => ['Region' => 'us-east-1', 'UseDualStack' => \false, 'UseFIPS' => \false]], ['documentation' => 'For region aws-cn-global with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['properties' => ['authSchemes' => [['name' => 'sigv4', 'signingName' => 'cloudfront', 'signingRegion' => 'cn-northwest-1']]], 'url' => 'https://cloudfront.cn-northwest-1.amazonaws.com.cn']], 'params' => ['Region' => 'aws-cn-global', 'UseDualStack' => \false, 'UseFIPS' => \false]], ['documentation' => 'For region cn-north-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://cloudfront-fips.cn-north-1.api.amazonwebservices.com.cn']], 'params' => ['Region' => 'cn-north-1', 'UseDualStack' => \true, 'UseFIPS' => \true]], ['documentation' => 'For region cn-north-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://cloudfront-fips.cn-north-1.amazonaws.com.cn']], 'params' => ['Region' => 'cn-north-1', 'UseDualStack' => \false, 'UseFIPS' => \true]], ['documentation' => 'For region cn-north-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://cloudfront.cn-north-1.api.amazonwebservices.com.cn']], 'params' => ['Region' => 'cn-north-1', 'UseDualStack' => \true, 'UseFIPS' => \false]], ['documentation' => 'For region cn-north-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['properties' => ['authSchemes' => [['name' => 'sigv4', 'signingName' => 'cloudfront', 'signingRegion' => 'cn-northwest-1']]], 'url' => 'https://cloudfront.cn-northwest-1.amazonaws.com.cn']], 'params' => ['Region' => 'cn-north-1', 'UseDualStack' => \false, 'UseFIPS' => \false]], ['documentation' => 'For region us-gov-east-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://cloudfront-fips.us-gov-east-1.api.aws']], 'params' => ['Region' => 'us-gov-east-1', 'UseDualStack' => \true, 'UseFIPS' => \true]], ['documentation' => 'For region us-gov-east-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://cloudfront-fips.us-gov-east-1.amazonaws.com']], 'params' => ['Region' => 'us-gov-east-1', 'UseDualStack' => \false, 'UseFIPS' => \true]], ['documentation' => 'For region us-gov-east-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://cloudfront.us-gov-east-1.api.aws']], 'params' => ['Region' => 'us-gov-east-1', 'UseDualStack' => \true, 'UseFIPS' => \false]], ['documentation' => 'For region us-gov-east-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://cloudfront.us-gov-east-1.amazonaws.com']], 'params' => ['Region' => 'us-gov-east-1', 'UseDualStack' => \false, 'UseFIPS' => \false]], ['documentation' => 'For region us-iso-east-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://cloudfront-fips.us-iso-east-1.c2s.ic.gov']], 'params' => ['Region' => 'us-iso-east-1', 'UseDualStack' => \false, 'UseFIPS' => \true]], ['documentation' => 'For region us-iso-east-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://cloudfront.us-iso-east-1.c2s.ic.gov']], 'params' => ['Region' => 'us-iso-east-1', 'UseDualStack' => \false, 'UseFIPS' => \false]], ['documentation' => 'For region us-isob-east-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://cloudfront-fips.us-isob-east-1.sc2s.sgov.gov']], 'params' => ['Region' => 'us-isob-east-1', 'UseDualStack' => \false, 'UseFIPS' => \true]], ['documentation' => 'For region us-isob-east-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://cloudfront.us-isob-east-1.sc2s.sgov.gov']], 'params' => ['Region' => 'us-isob-east-1', 'UseDualStack' => \false, 'UseFIPS' => \false]], ['documentation' => 'For custom endpoint with region set and fips disabled and dualstack disabled', 'expect' => ['endpoint' => ['url' => 'https://example.com']], 'params' => ['Region' => 'us-east-1', 'UseDualStack' => \false, 'UseFIPS' => \false, 'Endpoint' => 'https://example.com']], ['documentation' => 'For custom endpoint with region not set and fips disabled and dualstack disabled', 'expect' => ['endpoint' => ['url' => 'https://example.com']], 'params' => ['UseDualStack' => \false, 'UseFIPS' => \false, 'Endpoint' => 'https://example.com']], ['documentation' => 'For custom endpoint with fips enabled and dualstack disabled', 'expect' => ['error' => 'Invalid Configuration: FIPS and custom endpoint are not supported'], 'params' => ['Region' => 'us-east-1', 'UseDualStack' => \false, 'UseFIPS' => \true, 'Endpoint' => 'https://example.com']], ['documentation' => 'For custom endpoint with fips disabled and dualstack enabled', 'expect' => ['error' => 'Invalid Configuration: Dualstack and custom endpoint are not supported'], 'params' => ['Region' => 'us-east-1', 'UseDualStack' => \true, 'UseFIPS' => \false, 'Endpoint' => 'https://example.com']]], 'version' => '1.0'];
