//  function to move bottom to top 
YUI().use('node', function(Y) {
    window.thisisy = Y;
    Y.one(window).on('scroll', function(e) {
	    		var node = Y.one('#back-to-top');
		//alert(Y.one('window').get('docScrollY'));
		
    	    if (Y.one('window').get('docScrollY') > Y.one('#page-content').getY()) {
    		    node.setStyle('display', 'block');
    	    } else {
    		    node.setStyle('display', 'none');
    	    }
    });
});