function Customer() {
	this.show = function() {
		print('I am a customer');
	};
};

function Admin() {
	this.show = function() {
		print('I am a admin');
	};
};

var type = 'admin';

if (type == 'admin') {
	var user = new Admin();
} else {
	var user = new Customer();
}
user.show()