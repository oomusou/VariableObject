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
var className = (type == 'admin') ? 'Admin' : 'Customer';
var user = new this[className];
user.show()