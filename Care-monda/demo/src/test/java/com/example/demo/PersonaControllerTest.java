package com.crud.demo.controller;

import com.crud.demo.modelo.Persona;
import com.crud.demo.repository.PersonaRepository;
import org.junit.jupiter.api.BeforeEach;
import org.junit.jupiter.api.Test;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.test.autoconfigure.web.servlet.AutoConfigureMockMvc;
import org.springframework.boot.test.autoconfigure.web.servlet.WebMvcTest;
import org.springframework.http.MediaType;
import org.springframework.test.web.servlet.MockMvc;
import org.springframework.test.web.servlet.ResultActions;

import java.util.Arrays;
import java.util.List;

import static org.hamcrest.Matchers.*;
import static org.springframework.test.web.servlet.request.MockMvcRequestBuilders.*;
import static org.springframework.test.web.servlet.result.MockMvcResultMatchers.*;

@WebMvcTest(PersonaController.class)
@AutoConfigureMockMvc
public class PersonaControllerTest {
    @Autowired
    private MockMvc mockMvc;

    @Autowired
    private PersonaRepository personaRepository;

    @BeforeEach
    public void setUp() {
        // Puedes agregar datos de prueba en la base de datos antes de ejecutar las pruebas
        Persona persona1 = new Persona(1, "Nombre1", "Teléfono1");
        Persona persona2 = new Persona(2, "Nombre2", "Teléfono2");
        List<Persona> personas = Arrays.asList(persona1, persona2);
        personaRepository.saveAll(personas);
    }

    @Test
    public void shouldReturnListOfPersons() throws Exception {
        mockMvc.perform(get("/api/personas"))
            .andExpect(status().isOk())
            .andExpect(content().contentType(MediaType.APPLICATION_JSON))
            .andExpect(jsonPath("$", hasSize(2)))
            .andExpect(jsonPath("$[0].nombre", is("Nombre1")))
            .andExpect(jsonPath("$[1].nombre", is("Nombre2")));
    }

    // Agregar más pruebas para otras operaciones CRUD como crear, actualizar y eliminar personas
}
