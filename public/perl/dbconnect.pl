use strict;
use warnings;
# use v5.10;
use feature ':5.10';
# use DBD::Mysql; 
use DBI;

my $dsn = "DBI:mysql:test:localhost";
my $username = "root";
my $password = "";

# my %attr = ( PrintError=>0,  # turn off error reporting via warn()
#              RaiseError=>1);   # turn on error reporting via die()

# my $dbc = DBI->connect($dsn,$username,$password, \%attr);

my $dbc  = DBI->connect($dsn,$username,$password) or 
            die("Error connecting to the database: $DBI::errstr\n");

# say "Connected to the MySQL database.";