/**
 * Play deal animation of selected card to the selected hand. If dealer is true, the card will be dealt to the dealer.
 * If dealer is false, the card will be dealt to the player.
 *
 * @param string suit Suit of card to deal
 * @param string rank Card rank
 * @param boolean dealer Hand to deal to
 * @param function callback Function to call once card has been dealt
 */
function dealCard(suit, rank, dealer, callback) {
    //We don't want to play the 'sliding' animation if this is the first card in the hand
    var cards = $((dealer ? '.dealer' : '.player') + '.hand').children().length != 0;

    //Create a card and set it off-screen so we can animate it in later
    $((dealer ? '.dealer' : '.player') + '.hand').append('<div style=\'opacity: 0; position: relative; left: -1000px; ' +
    'bottom: 100px;' + (cards ? 'margin-left: -100px' : '') + '\' class=\'card ' + rank + ' ' + suit + ' animate\'></div>');

    //Animate the card to it's proper position
    $('.card.animate').animate({
        opacity: 1,
        position: 'fixed',
        left: 0,
        bottom: 0
    }, 500, function() {
        //If there are multiple cards play the sliding animation
        if (cards) {
            $('.card.animate').animate({
                margin: '0 0 0 -70px'
            }, 100, function () {
                $('.card.animate').removeClass('animate');
                callback();
            });
        } else {
            $('.card.animate').removeClass('animate');
            callback();
        }
    });
}


//Just an example hand
$().ready(function() {
    dealCard('hearts', 'ace', false, function() {
        dealCard('clubs', 'ten', true, function() {
            dealCard('diamonds', 'six', false, function() {
                dealCard('back', '', true, function() {});
            });
        });
    });
});