package com.example.gadgetcart.model

data class Product(
    val imageResId: Int,
    val name: String,
    val price: Float,
    val rating: String,
    val isFavorite: Boolean
)
