use strict;
use warnings;
use v5.10;
# use feature ':5.10';
# use CGI;
# use CGI::Ajax;
use DBI;
# use JSON;

my $database = 'test';
my $dsn = "DBI:mysql:database=$database";

my $username = "root";
my $password = "";

# my @links = get_links();

# my $cgi = new CGI();
# my $date = $cgi->param("date");
# my $description = $cgi->param("description");

my $dbc = DBI->connect($dsn,$username,$password) or 
            die("Error connecting to the database: $DBI::errstr\n");

# say "Connected to the MySQL database.";

my $stmt = $dbc->prepare("SELECT * FROM companions");

$stmt->execute() or die $DBI::errstr;

# print $stmt->rows;

while (my @row = $stmt->fetchrow_array()) {
  my ($first_name, $last_name, $home) = @row;
  print "First Name = $first_name, Last Name = $last_name, Home = $home\n";
}

$stmt->finish();

# query_links($dbc);

# my $query = "INSERT INTO application (date, description) 
#                          VALUES ('11-26-2017', 'yo man')";

# my $stmt = $dbc->prepare($query);

# say "Success!";

# foreach my $link(@links) {
#   if ($stmt->execute($link->{date}, $link->{description})) {
#     say "link $link->{description} inserted successfully";
#   }
# }

# # $stmt->execute($link->{date}, $link->{description});

# $stmt->finish();

# $dbc->disconnect();

# sub get_links {
#   my $cmd = '';
#   my @links;

#   my($date, $description);

#   do {
#     say "date:"
#     chomp($date = <STDIN>);

#     say "description:";
#     chomp($description = <STDIN>);

#     my %link = (date=> $date, description=> $description);

#     push(@links, \%link);

#     print ("\nDo you want to insert something else?");
#     chomp($cmd = <STDIN>);
#     $cmd = uc($cmd);
#   }until($cmd eq 'N');

#   return @links;
  
# }