<? php
require_once ( 'lib / nusoap.php' );
$ wsdl = "http://webservices.oorsprong.org/websamples.countryinfo/CountryInfoService.wso?WSDL" ;


$ client = nouveau nusoap_client ( $ wsdl , 'wsdl' );
$ err = $ client -> getError ();
if ( $ err ) {
   echo  '<h2> L \' erreur est: </h2> ' . $ err ;
   exit ();
}

$ result = $ client -> call ( 'CapitalCity' , array ( 'sCountryISOCode' => 'US' ));

echo  'La capitale des ETATS-UNIS est <strong>' . ( $ result [ 'CapitalCityResult' ]). "</strong> <br>" ;
?>