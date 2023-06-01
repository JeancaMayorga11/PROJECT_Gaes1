const allDropdown = document.querySelectorAll('#sidebar .side-dropdown');
const sidebar = document.getElementById('sidebar');

allDropdown.forEach(item=> {
	const a = item.parentElement.querySelector('a:first-child');
	a.addEventListener('click', function (e) {
		e.preventDefault();

		if(!this.classList.contains('active')) {
			allDropdown.forEach(i=> {
				const aLink = i.parentElement.querySelector('a:first-child');

				aLink.classList.remove('active');
				i.classList.remove('show');
			})
		}

		this.classList.toggle('active');
		item.classList.toggle('show');
	})
})




const toggleSidebar = document.querySelector('nav .toggle-sidebar');
const allSideDivider = document.querySelectorAll('#sidebar .divider');

if(sidebar.classList.contains('hide')) {
	allSideDivider.forEach(item=> {
		item.textContent = '-'
	})
	allDropdown.forEach(item=> {
		const a = item.parentElement.querySelector('a:first-child');
		a.classList.remove('active');
		item.classList.remove('show');
	})
} else {
	allSideDivider.forEach(item=> {
		item.textContent = item.dataset.text;
	})
}

toggleSidebar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');

	if(sidebar.classList.contains('hide')) {
		allSideDivider.forEach(item=> {
			item.textContent = '-'
		})

		allDropdown.forEach(item=> {
			const a = item.parentElement.querySelector('a:first-child');
			a.classList.remove('active');
			item.classList.remove('show');
		})
	} else {
		allSideDivider.forEach(item=> {
			item.textContent = item.dataset.text;
		})
	}
})




sidebar.addEventListener('mouseleave', function () {
	if(this.classList.contains('hide')) {
		allDropdown.forEach(item=> {
			const a = item.parentElement.querySelector('a:first-child');
			a.classList.remove('active');
			item.classList.remove('show');
		})
		allSideDivider.forEach(item=> {
			item.textContent = '-'
		})
	}
})



sidebar.addEventListener('mouseenter', function () {
	if(this.classList.contains('hide')) {
		allDropdown.forEach(item=> {
			const a = item.parentElement.querySelector('a:first-child');
			a.classList.remove('active');
			item.classList.remove('show');
		})
		allSideDivider.forEach(item=> {
			item.textContent = item.dataset.text;
		})
	}
})



const profile = document.querySelector('nav .profile');
const imgProfile = profile.querySelector('img');
const dropdownProfile = profile.querySelector('.profile-link');

imgProfile.addEventListener('click', function () {
	dropdownProfile.classList.toggle('show');
})



const allMenu = document.querySelectorAll('main .content-data .head .menu');

allMenu.forEach(item=> {
	const icon = item.querySelector('.icon');
	const menuLink = item.querySelector('.menu-link');

	icon.addEventListener('click', function () {
		menuLink.classList.toggle('show');
	})
})



window.addEventListener('click', function (e) {
	if(e.target !== imgProfile) {
		if(e.target !== dropdownProfile) {
			if(dropdownProfile.classList.contains('show')) {
				dropdownProfile.classList.remove('show');
			}
		}
	}

	allMenu.forEach(item=> {
		const icon = item.querySelector('.icon');
		const menuLink = item.querySelector('.menu-link');

		if(e.target !== icon) {
			if(e.target !== menuLink) {
				if (menuLink.classList.contains('show')) {
					menuLink.classList.remove('show')
				}
			}
		}
	})
})




const allProgress = document.querySelectorAll('main .card .progress');

allProgress.forEach(item=> {
	item.style.setProperty('--value', item.dataset.value)
})





var options = {
  series: [{
  name: 'series1',
  data: [31, 40, 28, 51, 42, 109, 100]
}, {
  name: 'series2',
  data: [11, 32, 45, 32, 34, 52, 41]
}],
  chart: {
  height: 350,
  type: 'area'
},
dataLabels: {
  enabled: false
},
stroke: {
  curve: 'smooth'
},
xaxis: {
  type: 'datetime',
  categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
},
tooltip: {
  x: {
    format: 'dd/MM/yy HH:mm'
  },
},
};

var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();

var selectedRow = null;

function showAlert(message,className) {
	const div = document.createElement("div");
	div.className = 'alert alter-${className}';

	div.appendChild(document.createTextNode(message));
	const container = document.querySelector(".container");
	const main = document.querySelector(".main");
	container.insertBefore(div, main);

	setTimeout(() => document.querySelector(".alert").remove(), 3000);
}

function clearFields(){
	document.querySelector("#idMaintenance").value = "";
	document.querySelector("#type").value = "";
	document.querySelector("#state").value = "";
	document.querySelector("#device").value = "";
    document.querySelector("#brand").value = "";
}

document.querySelector("#element-form").addEventListener("submit", (e) => {
	e.preventDefault();

	const idMaintenance = document.querySelector("#idMaintenance").value;
	const type = document.querySelector("#type").value;
	const state = document.querySelector("#state").value;
	const device = document.querySelector("#device").value;
    const brand = document.querySelector("#brand").value;

	if(idMaintenance == "" || type == "" || state == "" || device == "" || brand == ""){
		showAlert("Please fill in all fields", "danger");
	}
	else {
		if(selectedRow == null){
			const list = document.querySelector("#element-list");
			const row = document.createElement("tr");

			row.innerHTML = `
				<td>${idMaintenance}</td>
				<td>${type}</td>
				<td>${state}</td>
				<td>${device}</td>
                <td>${brand}</td>
				<td>
				<a href="#" class="btn btn-warning btn-sm edit">Edit</a>
				<a href="#" class="btn btn-danger btn-sm delete">Delete</a>

			`;
			list.appendChild(row);
			selectedRow = null;
			showAlert("Maintenance Added","success");
		}
		else{
			selectedRow.children[0].textContent = idMaintenance;
			selectedRow.children[1].textContent = type;
			selectedRow.children[2].textContent = state;
			selectedRow.children[3].textContent = device;
            selectedRow.children[4].textContent = brand;
			selectedRow = null;
			showAlert("Maintenance Info Edited","info");



		}
		clearFields();


	}
});


document.querySelector("#element-list").addEventListener("click", (e) => {
	target = e.target;
	if(target.classList.contains("edit")){
		selectedRow = target.parentElement.parentElement;
		document.querySelector("#idMaintenance").value = selectedRow.children[0].textContent;
		document.querySelector("#type").value = selectedRow.children[1].textContent;
		document.querySelector("#state").value = selectedRow.children[2].textContent;
		document.querySelector("#device").value = selectedRow.children[3].textContent;
        document.querySelector("#brand").value = selectedRow.children[4].textContent;

	}
});

document.querySelector("#element-list").addEventListener("click",(e) =>{
	target = e.target;
	if(target.classList.contains("delete")){
		target.parentElement.parentElement.remove();
		showAlert("Maintenance Data Deleted","danger");
	}
});