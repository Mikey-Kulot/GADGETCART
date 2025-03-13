package com.example.gadgetcart

import android.content.Intent
import android.os.Bundle
import android.view.View
import androidx.recyclerview.widget.GridLayoutManager
import androidx.recyclerview.widget.LinearLayoutManager
import androidx.recyclerview.widget.RecyclerView
import androidx.viewpager2.widget.CompositePageTransformer
import androidx.viewpager2.widget.MarginPageTransformer
import com.example.gadgetcart.Adapter.FlashsaleAdapter
import com.example.gadgetcart.Adapter.CategoryAdapter
import com.example.gadgetcart.Adapter.ProductAdapter
import com.example.gadgetcart.databinding.ActivityMainBinding
import com.example.gadgetcart.model.FlashsaleModel
import com.example.gadgetcart.model.Category
import com.example.gadgetcart.model.Product

class MainActivity : BaseActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        binding = ActivityMainBinding.inflate(layoutInflater)
        setContentView(binding.root)

        setupNavigation()
        setupCategories()
        setupFlashSale()
        setupJustForYouProducts()
    }

    private fun setupCategories() {
        val categories = listOf(
            Category("Cellphone", R.drawable.cellphone),
            Category("Tablet", R.drawable.tablet),
            Category("Computer", R.drawable.monitor),
            Category("Laptop", R.drawable.laptop),
            Category("Accessories", R.drawable.headphones),
            Category("Smartwatch", R.drawable.smartwatch),
            Category("Drones", R.drawable.drone)
        )

        binding.viewCategory.layoutManager =
            LinearLayoutManager(this, LinearLayoutManager.HORIZONTAL, false)
        binding.viewCategory.adapter = CategoryAdapter(this, categories)
    }

    private fun setupFlashSale() {
        val flashSaleItems = listOf(
            FlashsaleModel(R.drawable.image_flashsale),
            FlashsaleModel(R.drawable.image_flashsale)
        )

        val flashSaleAdapter = FlashsaleAdapter(flashSaleItems)
        binding.viewPager.adapter = flashSaleAdapter
        binding.viewPager.clipToPadding = false
        binding.viewPager.clipChildren = false
        binding.viewPager.offscreenPageLimit = 2
        binding.viewPager.getChildAt(0)?.overScrollMode = RecyclerView.OVER_SCROLL_NEVER

        val compositePageTransformer = CompositePageTransformer().apply {
            addTransformer(MarginPageTransformer(40))
        }
        binding.viewPager.setPageTransformer(compositePageTransformer)

        if (flashSaleItems.size > 1) {
            binding.dotsIndicator.visibility = View.VISIBLE
            binding.dotsIndicator.attachTo(binding.viewPager)
        }
    }

    private fun setupJustForYouProducts() {
        val justForYouProducts = listOf(
            Product(R.drawable.ryzen, "AMD Ryzen 7", 4.7f, "$299.99", false),
            Product(R.drawable.imac, "Apple iMac M1", 4.9f, "$1299.99", false),
            Product(R.drawable.laptop, "Asus Gaming Laptop", 4.8f, "$999.99", false),
            Product(R.drawable.cellphone, "Mechanical Keyboard", 4.5f, "$79.99", false)
        )

        binding.viewForyou.layoutManager = GridLayoutManager(this, 2)
        binding.viewForyou.adapter = ProductAdapter(justForYouProducts)
    }
}
