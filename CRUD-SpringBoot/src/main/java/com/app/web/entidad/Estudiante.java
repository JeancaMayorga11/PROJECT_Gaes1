package com.app.web.entidad;

import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.Table;

@Entity
@Table(name = "elementos")
public class Estudiante {
	
	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	private Long id;
	
	@Column (name = "nombre",nullable = false,length = 30)
	private String nombre;
	
	@Column (name = "Cantidad",nullable = false,length= 5)
	private String Cantidad ;

	@Column (name = "Precio",nullable = false, length = 5)
	private String Precio;

	public Estudiante() {
		
	}

	public Estudiante( String nombre, String cantidad, String precio) {
		super();
		this.nombre = nombre;
		Cantidad = cantidad;
		Precio = precio;
	}

	public Long getId() {
		return id;
	}

	public void setId(Long id) {
		this.id = id;
	}

	public String getNombre() {
		return nombre;
	}

	public void setNombre(String nombre) {
		this.nombre = nombre;
	}

	public String getCantidad() {
		return Cantidad;
	}

	public void setCantidad(String cantidad) {
		Cantidad = cantidad;
	}

	public String getPrecio() {
		return Precio;
	}

	public void setPrecio(String precio) {
		Precio = precio;
	}
	
	

	
	
}


