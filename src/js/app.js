const Toast = Swal.mixin({
	toast: true,
	position: 'top-end',
	showConfirmButton: false,
	timer: 3000,
	timerProgressBar: true,
	onOpen: (toast) => {
		toast.addEventListener('mouseenter', Swal.stopTimer)
		toast.addEventListener('mouseleave', Swal.resumeTimer)
	}
});
NProgress.start();
NProgress.set(0.4);
NProgress.inc();
NProgress.configure({ ease: 'ease', speed: 500 });
NProgress.configure({ trickleSpeed: 800 });
NProgress.configure({ showSpinner: false });
NProgress.configure({ parent: '#container' });
NProgress.done();
var app = new Vue({
	el: "#app",
	data() {
		return {
			fullName: '',
			email: '',
			phoneNumber: '',
			message: '',
			gender: '',
			location: '',
			get_involded_by: '',
			volunteerBtn: 'Get Involved',
			submitBtn: 'Send Us A Message',
		};
	},
	methods: {
		sendMessage() {
			this.phoneNumber.replace(/ /g, '')
			if (this.phoneNumber == '') {
				Toast.fire({
					icon: 'error',
					title: `Please fill out all fields!`
				})
			} else {
				this.submitBtn = `Sending...`;
				axios.post(`https://nova-core.herokuapp.com/mecaht/api/contact`, {
					fullName: this.fullName,
					email: this.email,
					phoneNumber: this.phoneNumber,
					message: this.message,
				}).then(res => {
					this.fullName = '';
					this.email = '';
					this.phoneNumber = '';
					this.message = '';
					this.submitBtn = 'Send Us A Message';
					Swal.fire({
						icon: 'success',
						title: 'Message Sent',
						text: 'We have received your message and will be in touch!',
					})
				}).catch(err => {
					this.submitBtn = 'Send Us A Message';
					console.log(err);
					Toast.fire({
						icon: 'error',
						title: `An error has occured, please try again`
					})
				})
			}
		},
		getInvolved() {
			this.phoneNumber.replace(/ /g, '')
			if (this.phoneNumber == '') {
				Toast.fire({
					icon: 'error',
					title: `Please fill out all fields!`
				})
			} else {
				this.volunteerBtn = `Sending...`;
				axios.post(`https://nova-core.herokuapp.com/mecaht/api/get_involved`, {
					fullName: this.fullName,
					email: this.email,
					phoneNumber: this.phoneNumber,
					gender: this.gender,
					location: this.location,
					get_involded_by: this.get_involded_by
				}).then(res => {
					this.fullName = '';
					this.email = '';
					this.phoneNumber = '';
					this.gender = '';
					this.get_involded_by = '';
					this.location = '';
					this.volunteerBtn = 'Get Involved';
					Swal.fire({
						icon: 'success',
						title: 'Thank you!',
						text: 'We are glad you have chosen to take this step. Will be in touch!',
					})
				}).catch(err => {
					this.volunteerBtn = 'Get Involved';
					console.log(err);
					Toast.fire({
						icon: 'error',
						title: `An error has occured, please try again`
					})
				})
			}
		}
	}
})
