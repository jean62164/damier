<?php

function affDamier( $largeur, $hauteur  )
{
	print("<table>");

		for ( $ligne = 0 ; $ligne < $hauteur ; $ligne ++)
		{
			print("<tr>\n");

				for ( $colonne=0 ; $colonne<$largeur; $colonne++ )
				{
					if  ( ($colonne+$ligne)%2==1)
						print( "<td class=\"damierBlack\"></td>\n");
					else 
						print( "<td class=\"damierWhite\"></td>\n");
				}
			
			print("</tr>\n");
		}
	print("</table>");
}



print("<link rel=\"stylesheet\" type=\"text/css\" href=\"damier.css\" />");

print( "Les Boucles imbriquées (loop) <br>" );


affDamier( 5, 5);
affDamier( 10, 10);
affDamier( 2, 2);


?>