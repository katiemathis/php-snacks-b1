<?php 

    $text = 'Augusta Ada King, Countess of Lovelace (née Byron; 10 December 1815 – 27 November 1852) was an English mathematician and writer, chiefly known for her work on Charles Babbages proposed mechanical general-purpose computer, the Analytical Engine. 
    She was the first to recognise that the machine had applications beyond pure calculation, and to have published the first algorithm intended to be carried out by such a machine. As a result, she is often regarded as the first computer programmer. Ada Byron was the only child of poet Lord Byron and mathematician Lady Byron.
    All of Byrons other children were born out of wedlock to other women. Byron separated from his wife a month after Ada was born and left England forever. Four months later, he commemorated the parting in a poem that begins, "Is thy face like thy mothers my fair child! ADA! sole daughter of my house and heart?". 
    He died in Greece when Ada was eight years old. Her mother remained bitter and promoted Adas interest in mathematics and logic in an effort to prevent her from developing her fathers perceived insanity. Despite this, Ada remained interested in him, naming her two sons Byron and Gordon. Upon her death, she was buried next to him at her request. 
    Although often ill in her childhood, Ada pursued her studies assiduously. She married William King in 1835. King was made Earl of Lovelace in 1838, Ada thereby becoming Countess of Lovelace. Her educational and social exploits brought her into contact with scientists such as Andrew Crosse, Charles Babbage, Sir David Brewster, 
    Charles Wheatstone, Michael Faraday and the author Charles Dickens, contacts which she used to further her education. Ada described her approach as "poetical science"[8] and herself as an "Analyst (& Metaphysician)".
    When she was a teenager (18), her mathematical talents led her to a long working relationship and friendship with fellow British mathematician Charles Babbage, who is known as "the father of computers". She was in particular interested in Babbages work on the Analytical Engine. Lovelace first met him in June 1833, through their mutual friend, and her private tutor, Mary Somerville.';


    $paragraphs = explode('.', $text);

    for($i=0;$i<count($paragraphs);$i++) {
        echo "<p> $paragraphs[$i]. </p>";
    }
