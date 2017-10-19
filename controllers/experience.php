<?php
$experiences = [
    'bvd' => [
        'job' => 'Application Support Analyst',
        'company' => "Moody's",
        'contractor' => "Bureau van Dijk",
        'period' => "Jan 2017 - Present",
        'location' => "Brussels, Belgium",
        'languages' => ["FR", "EN"],
        'description' => "Second line support for the web-based FACT application.",
        'technologies' => [
            'Microsoft IIS',
            'Microsoft SQL Server 2008, 2012, 2014',
            'Microsoft Powershell',
            'Microsoft File Server',
            'Microsoft Visual Studio 2015',
            'Microsoft Sourcesafe',
            'Microsoft Team Foundation Server',
            'Oracle Virtualbox',
            'Keepass'
        ]
    ],
    
    
    'curia' => [
        'job' => 'Service Desk Operator',
        'company' => "Court of Justice of the European Union",
        'period' => "Nov 2015 - Dec 2016",
        'location' => "Luxembourg City, Luxembourg",
        'languages' => ["FR"],
        'description' => "First and second level service desk agent.",
        'technologies' => [
            'Microsoft Active Directory',
            'Microsoft File server',
            'Microsoft Exchange',
            'Microsoft Powershell'
        ]
    ],
    
    
    'catella' => [
        'job' => 'Service Desk Operator',
        'company' => "Catella Bank",
        'contractor' => "CTG",
        'period' => "Jun 2015 - Oct 2015",
        'location' => "Capellen, Luxembourg",
        'languages' => ["FR", "EN"],
        'description' => "Service desk agent at Catella Bank (private investments bank)",
        'responsibilities' => ["Helpdesk outsourcing to CTG",
                               "Documentation and standardisation",
                               "Second line system administration",
                               "Software and hardawe support"],
        'technologies' => [
            'Microsoft Active Directory',
            'Microsoft File server',
            'Citrix (XenDesktop, XenServer, XenApp)',
            'IBM Notes/Domino and Admin',
            'Jira',
            'ScopTel',
            'Eset Nod32 server'
        ]
    ],
    
    
    'adidas' => [
        'job' => 'Customer Support',
        'company' => "Adidas",
        'period' => "Jun 2014 - Mar 2015",
        'location' => "Maastricht, Netherlands",
        'languages' => ["FR", "EN"],
        'description' => "Support for the Adidas online shop, helping customers from France, Belgium, UK, Ireland, Denmark, Finland and Sweden"
    ]
];

$inverted = false;

include 'views/experience.php';