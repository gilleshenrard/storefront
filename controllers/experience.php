<?php
$experiences = [
    'bvd' => [
        'job' => 'Application Support Analyst',
        'company' => "Moody's",
        'contractor' => "Bureau van Dijk",
        'period' => "Jan 2017 - Present",
        'location' => "Brussels, Belgium",
        'description' => "2nd line support for the FACT (previously Bankscore) application.",
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
        'description' => "First level service desk agent at the European Court of Justice.
						  The support is provided in English and French.",
        'technologies' => [
            'Microsoft Active Directory',
            'Microsoft File server',
            'Microsoft Exchange',
            'Microsoft Powershell'
        ]
    ],
    'catella' => [
        'job' => 'Service Desk Operator',
        'company' => "Catella",
        'period' => "Jun 2015 - Oct 2015",
        'location' => "Capellen, Luxembourg",
        'description' => "Service desk agent at Catella Bank (private investments bank)
						  The support is provided in English and French.",
        'responsibilities' => "- Help users with general and more specific issues with their Windows session, phone, tools and requests.
                                            - Help outsourcing the helpdesk service to CTG, in order to provide a call center coverage.
                                            - Set up standard templates, build procedures
                                            - Review the evolution of the infrastructure and report the eventual problems we could encounter with the system to the IT team.
                                            - Propose hardware oriented support, such as placing server blades, cabling, conference rooms setup, ...",
        'technologies' => [
            'Microsoft Active Directory',
            'Microsoft Application server',
            'Microsoft File server',
            'Sysprep / Windows ADK',
            'Citrix (XenDesktop, XenServer)',
            'Blackshield',
            'IBM Notes/Domino and Admin',
            'Jira',
            'ScopTel',
            'Xerox Center',
            'Eset Nod32 server'
        ]
    ],
    'adidas' => [
        'job' => 'Helpdesk Support',
        'company' => "Adidas",
        'period' => "Jun 2014 - Mar 2015",
        'location' => "Maastricht, Netherlands",
        'description' => "Customer support for the Adidas online shop, for France, Belgium, UK, Denmark, Finland and Sweden.
							The support is provided in English and French."
    ]
];

$inverted = false;

include 'views/experience.php';