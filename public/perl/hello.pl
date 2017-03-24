use strict;
use warnings;
use feature ':5.10';

# say "hello!\n";
# say "look, ", "a ", "list!";

# my $i = 5;
# my $pie_flavor = 'apple';
# my $constitution1776 = "We the People, etc.";

# say "The report is: $pie_flavor";
my @one_to_thirty = (1 .. 30);
my $top_limit = 40;
for my $i (@one_to_thirty, $top_limit) {
     say $i;
}


