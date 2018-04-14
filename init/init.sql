

/* TODO: create tables */
CREATE TABLE source_data (
	id	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	SSN	INTEGER NOT NULL
);

CREATE TABLE paycheck_data (
	id	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	SSN	NUMERIC NOT NULL,
	first_name	TEXT,
	last_name	TEXT,
	employed	TEXT,
	employer_name	TEXT,
	company_address	TEXT,
	employed_as_of	TEXT,
	most_recent_hire_date	TEXT,
	employee_status	TEXT
);

CREATE TABLE intuit_data (
	id	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	SSN	NUMERIC NOT NULL,
	first_name	TEXT,
	last_name	TEXT,
	employed	TEXT,
	employer_name	TEXT,
	company_address	TEXT,
	employed_as_of	TEXT,
	most_recent_hire_date	TEXT,
	employee_status	TEXT
);
CREATE TABLE surepay_data (
	id	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	SSN	NUMERIC NOT NULL,
	first_name	TEXT,
	last_name	TEXT,
	employed	TEXT,
	employer_name	TEXT,
	company_address	TEXT,
	employed_as_of	TEXT,
	most_recent_hire_date	TEXT,
	employee_status	TEXT
);

CREATE TABLE otherpay_data (
	id	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	SSN	NUMERIC NOT NULL,
	first_name	TEXT,
	last_name	TEXT,
	employed	TEXT,
	employer_name	TEXT,
	company_address	TEXT,
	employed_as_of	TEXT,
	most_recent_hire_date	TEXT,
	employee_status	TEXT
);


/*initial seed data */
-- INSERT INTO source_data (SSN) VALUES (3129029876);
-- INSERT INTO source_data (SSN) VALUES (1234567898);
-- INSERT INTO source_data (SSN) VALUES (7238947239);
-- INSERT INTO source_data (SSN) VALUES (3786478642);
-- INSERT INTO source_data (SSN) VALUES (3479823741);
-- INSERT INTO source_data (SSN) VALUES (8742967374);
-- INSERT INTO source_data (SSN) VALUES (6473658949);
-- INSERT INTO source_data (SSN) VALUES (9457984753);
-- INSERT INTO source_data (SSN) VALUES (9374598234);
-- INSERT INTO source_data (SSN) VALUES (3456788983);
-- INSERT INTO source_data (SSN) VALUES (3456789876);
-- INSERT INTO source_data (SSN) VALUES (3456222876);

INSERT INTO paycheck_data (SSN,first_name,last_name,employed,employer_name,company_address,employed_as_of,most_recent_hire_date,employee_status) VALUES (3129029876,"John","Doe","yes","Chevron","122 Palmdale Dr, El Paso, TX, 77324","3/10/2009","2/1/2009","hired");
INSERT INTO paycheck_data (SSN,first_name,last_name,employed,most_recent_hire_date) VALUES (7238947239,"Elizabeth","Ross","no","3/10/2017");
INSERT INTO paycheck_data (SSN,first_name,last_name,employed,employer_name,company_address,employed_as_of,most_recent_hire_date,employee_status) VALUES (8742967374,"James","Kevin","yes","Nike","19 Rockway Dr, Westchester, NY","3/10/2009","2/1/2009","hired");
INSERT INTO paycheck_data (SSN,first_name,last_name,employed,most_recent_hire_date) VALUES (9374598234,"Stacy","Banks","no","5/2/2017");
INSERT INTO paycheck_data (SSN,first_name,last_name,employed,most_recent_hire_date)VALUES (3129029976,"Hans","Fletcher","no","1/5/2018");
INSERT INTO paycheck_data (SSN,first_name,last_name,employed,employer_name,company_address,employed_as_of,most_recent_hire_date,employee_status) VALUES (5129029876,"Cindy","Wang","yes","Starbucks","182 Palmdale Dr, El Paso, TX, 77324","3/10/2009","2/1/2009","hired");
INSERT INTO paycheck_data (SSN,first_name,last_name,employed,employer_name,company_address,employed_as_of,most_recent_hire_date,employee_status) VALUES (6129029876,"Samir","Abdul","yes","Barclays","152 Palmdale Dr, El Paso, TX, 77324","3/10/2009","2/1/2009","hired");
INSERT INTO paycheck_data (SSN,first_name,last_name,employed,most_recent_hire_date) VALUES (9457984753,"Marisa","Rodriguez","no","8/12/2018");
INSERT INTO paycheck_data (SSN,first_name,last_name,employed,employer_name,company_address,employed_as_of,most_recent_hire_date,employee_status) VALUES (1234567898,"Richard","Escobar","yes","Chevron","122 Palmdale Dr, El Paso, TX, 77324","3/10/2009","2/1/2009","hired");

INSERT INTO otherpay_data (SSN,first_name,last_name,employed,employer_name,company_address,employed_as_of,most_recent_hire_date,employee_status) VALUES (3129029876,"John","Doe","yes","Chevron","122 Palmdale Dr, El Paso, TX, 77324","3/10/2009","2/1/2009","hired");
INSERT INTO otherpay_data (SSN,first_name,last_name,employed,most_recent_hire_date) VALUES (6473658949,"Tom","Goodwill","no","3/14/2017");
INSERT INTO otherpay_data (SSN,first_name,last_name,employed,employer_name,company_address,employed_as_of,most_recent_hire_date,employee_status) VALUES (3786478642,"Thomas","Calvin","yes","Target","122 Palmdale Dr, El Paso, TX, 77324","3/10/2009","2/1/2009","hired");
INSERT INTO otherpay_data (SSN,first_name,last_name,employed,most_recent_hire_date) VALUES (3479823741,"Daniel","Opik","no","5/2/2017");
INSERT INTO otherpay_data (SSN,first_name,last_name,employed,most_recent_hire_date)VALUES (3129029976,"Hans","Fletcher","no","1/5/2018");
INSERT INTO otherpay_data (SSN,first_name,last_name,employed,employer_name,company_address,employed_as_of,most_recent_hire_date,employee_status) VALUES (5657555567, "Cindy","Wang","yes","Chevron","122 Palmdale Dr, El Paso, TX, 77324","3/10/2009","2/1/2009","hired");
INSERT INTO otherpay_data (SSN,first_name,last_name,employed,employer_name,company_address,employed_as_of,most_recent_hire_date,employee_status) VALUES (3456789876,"Kara","Quinn","yes","Wells Fargo","23 Thorn Way, Cant, CT, 77324","3/10/2009","2/1/2009","hired");
INSERT INTO otherpay_data (SSN,first_name,last_name,employed,most_recent_hire_date) VALUES (9457984753,"Marisa","Rodriguez","no","8/12/2018");
INSERT INTO otherpay_data (SSN,first_name,last_name,employed,employer_name,company_address,employed_as_of,most_recent_hire_date,employee_status) VALUES (1234567898,"Richard","Escobar","yes","Chevron","122 Palmdale Dr, El Paso, TX, 77324","3/10/2009","2/1/2009","hired");

INSERT INTO intuit_data (SSN,first_name,last_name,employed,employer_name,company_address,employed_as_of,most_recent_hire_date,employee_status) VALUES (3129029876,"John","Doe","yes","Chevron","122 Palmdale Dr, El Paso, TX, 77324","3/10/2009","2/1/2009","hired");
INSERT INTO intuit_data (SSN,first_name,last_name,employed,most_recent_hire_date) VALUES (6473658949,"Tom","Goodwill","no","3/14/2017");
INSERT INTO intuit_data (SSN,first_name,last_name,employed,employer_name,company_address,employed_as_of,most_recent_hire_date,employee_status) VALUES (3456788983,"Greggory","Russel","yes","Virgin Atlantic","122 Palmdale Dr, El Paso, TX, 77324","3/10/2009","2/1/2009","hired");
INSERT INTO intuit_data (SSN,first_name,last_name,employed,most_recent_hire_date) VALUES (3479823741,"Daniel","Opik","no","5/2/2017");
INSERT INTO intuit_data (SSN,first_name,last_name,employed,most_recent_hire_date)VALUES (3129029976,"Hans","Fletcher","no","1/5/2018");
INSERT INTO intuit_data (SSN,first_name,last_name,employed,employer_name,company_address,employed_as_of,most_recent_hire_date,employee_status) VALUES (5657555567,"Cindy","Wang","yes","Chevron","122 Palmdale Dr, El Paso, TX, 77324","3/10/2009","2/1/2009","hired");
INSERT INTO intuit_data (SSN,first_name,last_name,employed,employer_name,company_address,employed_as_of,most_recent_hire_date,employee_status) VALUES (3456789876,"Kara","Quinn","yes","Wells Fargo","23 Thorn Way, Cant, CT, 77324","3/10/2009","2/1/2009","hired");
INSERT INTO intuit_data (SSN,first_name,last_name,employed,most_recent_hire_date) VALUES (9457984753,"Marisa","Rodriguez","no","8/12/2018");
INSERT INTO intuit_data (SSN,first_name,last_name,employed,employer_name,company_address,employed_as_of,most_recent_hire_date,employee_status) VALUES (1234567898,"Richard","Escobar","yes","Chevron","122 Palmdale Dr, El Paso, TX, 77324","3/10/2009","2/1/2009","hired");


INSERT INTO surepay_data (SSN,first_name,last_name,employed,employer_name,company_address,employed_as_of,most_recent_hire_date,employee_status) VALUES (3559029876,"Gwen","Doe","yes","Chevron","122 Palmdale Dr, El Paso, TX, 77324","3/10/2009","2/1/2009","hired");
INSERT INTO surepay_data (SSN,first_name,last_name,employed,most_recent_hire_date) VALUES (6473648949,"Paul","Camp","no","3/14/2017");
INSERT INTO surepay_data (SSN,first_name,last_name,employed,employer_name,company_address,employed_as_of,most_recent_hire_date,employee_status) VALUES (3456787783,"Greggory","Russel","yes","Virgin Atlantic","122 Palmdale Dr, El Paso, TX, 77324","3/10/2009","2/1/2009","hired");
INSERT INTO surepay_data (SSN,first_name,last_name,employed,most_recent_hire_date) VALUES (3472823741,"Samuel","Tub","no","5/2/2017");
INSERT INTO surepay_data (SSN,first_name,last_name,employed,most_recent_hire_date)VALUES (3129629976,"Cat","John","no","1/5/2018");
INSERT INTO surepay_data (SSN,first_name,last_name,employed,employer_name,company_address,employed_as_of,most_recent_hire_date,employee_status) VALUES (5657335567,"Larry","Wang","yes","Chevron","122 Palmdale Dr, El Paso, TX, 77324","3/10/2009","2/1/2009","hired");
INSERT INTO surepay_data (SSN,first_name,last_name,employed,employer_name,company_address,employed_as_of,most_recent_hire_date,employee_status) VALUES (3456999876,"Katherine","Quinn","yes","Wells Fargo","23 Thorn Way, Cant, CT, 77324","3/10/2009","2/1/2009","hired");
INSERT INTO surepay_data (SSN,first_name,last_name,employed,most_recent_hire_date) VALUES (9457934753,"Cate","Landon","no","8/12/2018");
INSERT INTO surepay_data (SSN,first_name,last_name,employed,employer_name,company_address,employed_as_of,most_recent_hire_date,employee_status) VALUES (1232567898,"Sam","Falkner","yes","Chevron","122 Palmdale Dr, El Paso, TX, 77324","3/10/2009","2/1/2009","hired");
